<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;

class NoAgreementOnDiscussionDetailsExport implements FromCollection
{protected $registrations;

    public function __construct($registrations)
    {
        $this->registrations = $registrations;
    }

    public function collection()
    {
        return $this->registrations->map(function ($registration) {
            return [
                'सि.नं.' => $registration->id,
                'दर्ता मिति' => $registration->registration_date,
                'नाम (निवेदकको विवरण)' => $registration->applicants_names,
                'स्थानीय तह (निवेदकको विवरण)' => $registration->applicants_local_governments,
                'वडा नं. (निवेदकको विवरण)' => $registration->applicants_wadas,
                'सम्पर्क नं. (निवेदकको विवरण)' => $registration->applicants_contacts,
                'नाम (विपक्षी/साहुको विवरण)' => $registration->offenders_names,
                'स्थानीय तह (विपक्षी/साहुको विवरण)' => $registration->offenders_local_governments,
                'वडा नं. (विपक्षी/साहुको विवरण)' => $registration->offenders_wadas,
                'सम्पर्क नं. (विपक्षी/साहुको विवरण)' => $registration->offenders_contacts,
                'लेनदेन भएको मिति' => \Carbon\Carbon::parse($registration->tansaction_date)->format('Y-m-d'),
                'लेनदेनको प्रयोजन' => $registration->transaction_purposes,
                'कारोवारको प्रकृती' => $registration->transaction_natures,
                'कारोवारको प्रमाण' => $registration->transaction_proof,
                'कारोवारको रु.' => $registration->transaction_proof_amount,
                'अन्तिम पटक छलफल भएको मिति' => $registration->last_discussed_date,
                'नगद रु.' => $registration->offender_demand,
                'तमसुक रु.' => '', // This column is not present in the table headers
                'चेक रकम रु.' => '',
                'जग्गा (क्षेत्रफल विघा-कठ्ठा-धुर)' => '',
                'कित्ता' => '',
                'सुन (ग्राममा)' => '',
                'चाँदी (ग्राममा)' => '',
                'नगद रु.' => '',
                'चेक रकम रु.' => '',
                'जग्गा (क्षेत्रफल विघा-कठ्ठा-धुर)' => '',
                'कित्ता' => '',
                'अन्य तरिका' => $registration->reason_to_disagreement,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'सि.नं.',
            'दर्ता मिति',
            'नाम (निवेदकको विवरण)',
            'स्थानीय तह (निवेदकको विवरण)',
            'वडा नं. (निवेदकको विवरण)',
            'सम्पर्क नं. (निवेदकको विवरण)',
            'नाम (विपक्षी/साहुको विवरण)',
            'स्थानीय तह (विपक्षी/साहुको विवरण)',
            'वडा नं. (विपक्षी/साहुको विवरण)',
            'सम्पर्क नं. (विपक्षी/साहुको विवरण)',
            'लेनदेन भएको मिति',
            'लेनदेनको प्रयोजन',
            'कारोवारको प्रकृती',
            'कारोवारको प्रमाण',
            'कारोवारको रु.',
            'अन्तिम पटक छलफल भएको मिति',
            'नगद रु.',
            'तमसुक रु.',
            'चेक रकम रु.',
            'जग्गा (क्षेत्रफल विघा-कठ्ठा-धुर)',
            'कित्ता',
            'सुन (ग्राममा)',
            'चाँदी (ग्राममा)',
            'नगद रु.',
            'चेक रकम रु.',
            'जग्गा (क्षेत्रफल विघा-कठ्ठा-धुर)',
            'कित्ता',
            'अन्य तरिका',
            'सहमती हुन नसक्नुका कारण',
        ];
    }
}
