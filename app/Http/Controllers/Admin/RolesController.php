<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\History;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\CreateRoleRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UtilityFunctions;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('hasPermission','view_roles'),403);

        $roles = UtilityFunctions::getRole();

        return view('admin.roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('hasPermission','create_roles'),403);

        $permissions = Permission::all();

        return view('admin.roles.create', [
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        abort_unless(Gate::allows('hasPermission','create_roles'),403);

        try {
            
            $role = new Role;
    
            $role->name = $convertedString=str_replace(' ', '-', $request['name']);
    
            if ($role->save()) {
    
                $role->permissions()->sync($request['permissions']);
    
                History::create([
                    'description' => 'Created role ' . $convertedString,
                    'user_id' => Auth::user()->id,
                    'type'=>1,
                    'ip_address'=>UtilityFunctions::getUserIP(),
                ]);
    
                return redirect()->route('admin.roles.index')->with('success','Success!! Role created');
            }
        } catch (\Exception) {
            return redirect()->back()->with('error','Error!! Role not created');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_unless(Gate::allows('hasPermission','update_roles'),403);

        $role = Role::with('permissions')->whereIn('id',[$id])->first();
        
        $permissions = Permission::all();

        // Retrieve permissions with IDs 1 to 4
        $user_permissions = Permission::whereIn('id', [1, 2, 3, 4])->get();

        $role_permissions = Permission::whereIn('id', [5, 6, 7, 8])->get();

        $permision_permissions = Permission::whereIn('id', [9, 10, 11, 12])->get();

        $history_permissions = Permission::whereIn('id', [13])->get();

        $userDeletion_permissions = Permission::whereIn('id', [14, 15, 16])->get();

        $register_permissions = Permission::whereIn('id', [18, 19, 20, 21])->get();

        $discussion_permissions = Permission::whereIn('id', [22, 23, 24, 25])->get();

        $release_permissions = Permission::whereIn('id', [26, 27, 28, 29])->get();

        $report_permissions = Permission::whereIn('id', [30, 31, 32, 33])->get();

        return view('admin.roles.update', [
            'role'                      => $role, 
            'permissions'               => $permissions, 
            'user_permissions'          => $user_permissions,
            'role_permissions'          => $role_permissions,
            'permission_permissions'    => $permision_permissions,
            'history_permissions'       => $history_permissions,
            'userDeletion_permissions'  => $userDeletion_permissions,
            'register_permissions'      => $register_permissions,
            'discussion_permissions'    => $discussion_permissions,
            'release_permissions'       => $release_permissions,
            'report_permissions'        => $report_permissions            

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','update_roles'),403);

        try {
            $role=Role::find($request->id);
    
            $this->validate($request,[
                'name' => ['required', Rule::unique('roles')->ignore($request->id)],
                'permissions'=>'required',
            ]);
    
            $role->name = $request['name'];
    
            if ( $role->update() ) {
                $role->permissions()->sync($request['permissions']);
                History::create([
                    'description' => 'Update Role with id ' . $request->id,
                    'user_id' => Auth::user()->id,
                    'type' => 1,
                    'ip_address' => UtilityFunctions::getUserIP(),
                ]);
    
                return Redirect()->route('admin.roles.index')->with('success', 'Success!! Role Updated');
            }
        } catch (\Exception ) {
            return Redirect::back()->with('error', 'Error!! Role Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('hasPermission','delete_roles'),403);

        try {
            $role=Role::find($id);
    
            if ($role->delete()) {
                $role->permissions()->detach();
                History::create([
                    'description' => 'Deleted role with id ' . $id,
                    'user_id' => Auth::user()->id,
                    'type' => 1,
                    'ip_address' => UtilityFunctions::getUserIP(),
                ]);
                return Redirect()->route('admin.roles.index')->with('success', 'Success!! Role Deleted');
            }
        } catch (\Exception) {
            return redirect()->back()->with('error', 'Error!! Failed to delete Role');
        }
    }
}
