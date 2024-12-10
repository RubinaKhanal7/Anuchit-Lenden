@extends('admin.layouts.master')

@section('content')
    @include('admin.includes.forms')

 
        <style>
            ul li {
                list-style: none;
                line-height: 30px;
                margin-top: 10px;
            }
    
            p {
                color: black !important;
            }
    
            @media print {
                #printableArea {
                    width: 100%;
                  
                   
                }
    
                #printableArea p {
                    color: black !important;
                    font-size: 12px;
    
                }
    
    
    
                ul li {
                    list-style: none;
                    line-height: 30px;
                    margin-top: 10px;
                }
    
                @page{
                    margin-top: 150px;
                }
        
    
            }
        </style>
  
        <div id="printableArea">
            <div class="container">
                <h3 class="text-center">अनुचित लेनदेन (मिटरब्याज) सम्बन्धी ऋण दिने व्यक्तिले भर्नुपर्ने फारम [फारम नं २]</h3>

                <div class="row border border-dark">
                    <div class="col-8 border border-dark m-0">
                        <p><b>१. निवेदक(ऋण/कर्जा लिने व्यक्ति) को विवरण:</b></p>
                    </div>

                    <div class="col-4 border border-bottom border-dark m-0">
                        <p><b>सम्बन्धित कार्यालयले भर्ने:</b></p>
                    </div>

                    <div class="col-8 row border border-dark m-0">
                        <div class="col-8">
                            <p>नाम, थर*: {{ $loanGivingVictim->basicDetailRegistration->applicant_name }}</p>
                        </div>
                        <div class="col-4">
                            <p>उमेर: {{ $loanGivingVictim->basicDetailRegistration->applicant_age }}</p>
                        </div>
                    </div>

                    <div class="col-4 border border-dark m-0">
                        <p>
                            दर्ता नं.: {{ $loanGivingVictim->registrationDetail->registration_id }}<br>
                            दर्ता मिति: {{ $loanGivingVictim->registrationDetail->registration_date }}<br>
                            कार्यालय: {{ $loanGivingVictim->registrationDetail->registration_office }}
                        </p>
                    </div>

                    <div class="col-6 row border border-dark m-0">
                        <div class="col-7">
                            <p>नागरिकता नं: {{ $loanGivingVictim->basicDetailRegistration->applicant_citizenship }}</p>
                        </div>
                        <div class="col-5">
                            <p>जिल्ला: {{ $getDistrictName($loanGivingVictim->basicDetailRegistration->applicant_citizenship_issue_district) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>जारी मिति: {{ $loanGivingVictim->basicDetailRegistration->applicant_citizenship_issue_date }}</p>
                    </div>

                    <div class="col-6 border border-dark m-0">
                        <p>बुवाको नाम, थर*: {{ $loanGivingVictim->basicDetailRegistration->applicant_fathername }}</p>
                    </div>

                    <div class="col-6 border border-dark m-0">
                        <p>ऋण दिने व्यक्ति को फोन/ मोबाईल नं:
                            {{ $loanGivingVictim->basicDetailRegistration->applicant_fathers_no }}</p>
                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>पति/पत्नीको नाम थर: {{ $loanGivingVictim->basicDetailRegistration->applicant_spouse }}</p>
                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>फोन/मोबाईल नं: {{ $loanGivingVictim->basicDetailRegistration->applicant_spouse_no }}</p>
                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>सगोल परिवारको सदस्य संख्या*: {{ $loanGivingVictim->basicDetailRegistration->applicant_family }}
                        </p>
                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>वार्षिक आम्दानी*: {{ $loanGivingVictim->basicDetailRegistration->applicant_annual_income }}</p>
                    </div>
                    <div class="col-6 border border-dark m-0 row">
                        <div class="col-6 m-0">
                            <p>स्थायी ठेगाना*:
                                <br>
                                प्रदेश:
                                {{ $getLocalName($loanGivingVictim->basicDetailRegistration->applicant_permanent_state) }}
                            </p>
                        </div>
                        <div class="col-6 m-0">
                            <br>
                            <p>जिल्ला:
                                {{ $getDistrictName($loanGivingVictim->basicDetailRegistration->applicant_permanent_district) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-6 border border-dark m-0 row">
                        <div class="col-6">
                            <p>
                                हाल बसोबासको ठेगाना:
                                <br>
                                प्रदेश:
                                {{ $getLocalName($loanGivingVictim->basicDetailRegistration->applicant_temp_state) }}
                            </p>
                        </div>
                        <div class="col-6">
                            <br>
                            <p>जिल्ला:
                                {{ $getDistrictName($loanGivingVictim->basicDetailRegistration->applicant_temp_district) }}
                            </p>
                        </div>

                    </div>

                    <div class="col-6 border border-dark m-0 row">
                        <div class="col-6">
                            <p>
                                न.पा./गा.पा:
                                {{ $getLocalName($loanGivingVictim->basicDetailRegistration->applicant_permanent_local) }}
                            </p>
                        </div>
                        <div class="col-6">
                            <p>वडा नं.: {{ $loanGivingVictim->basicDetailRegistration->applicant_permanent_ward }}</p>
                        </div>
                    </div>

                    <div class="col-6 border border-dark m-0 row">
                        <div class="col-6">
                            <p>
                                न.पा./गा.पा:
                                {{ $getLocalName($loanGivingVictim->basicDetailRegistration->applicant_temp_local) }}
                            </p>
                        </div>
                        <div class="col-6">
                            <p>वडा नं.: {{ $loanGivingVictim->basicDetailRegistration->applicant_temp_ward }}</p>
                        </div>

                    </div>
                    <div class="col-6 border border-dark m-0">
                        <p>(PAN) नं. : {{ $loanGivingVictim->basicDetailRegistration->applicant_pan }}</p>
                    </div>


                  

                    <div class="col-6 border border-dark m-0 row">
                        <div class="col-6">
                            <p>पेशा/व्यवसाय: {{ $loanGivingVictim->basicDetailRegistration->applicant_occup }}</p>
                        </div>
                        <div class="col-6">
                            <p>शैक्षिक योग्यता: {{ $loanGivingVictim->basicDetailRegistration->applicant_edu }}</p>
                        </div>
                    </div>

                </div>


                {{-- Arthik Awastha --}}

                <div class="row border border-dark">
                    <div class="col-12">
                        <p><b>आर्थिक अवस्था*:</b></p>
                        <p><b>(क) घरको विवरण:</b></p>
                        <p>(अ) घरको संख्या: {{ $loanGivingVictim->applicationFinance->home_no }}</p>
                        <p>(आ) घरले चर्चेको जग्गाको क्षेत्रफल: {{ $loanGivingVictim->applicationFinance->home_area }}</p>
                        <p>(इ) घरको किसिम (कच्ची/पक्की): {{ $loanGivingVictim->applicationFinance->home_type }}</p>
                        <p>(ई) घरको तला: {{ $loanGivingVictim->applicationFinance->home_storey }}</p>
                        <p>(उ) घर रहेको स्थान:
                            {{ $getStateName($loanGivingVictim->applicationFinance->home_state) }},
                            जिल्ला: {{ $getDistrictName($loanGivingVictim->applicationFinance->home_district) }},
                            न.पा./गा.पा: {{ $getLocalName($loanGivingVictim->applicationFinance->home_local) }},
                            वडा नं: {{ $loanGivingVictim->applicationFinance->home_ward }}
                        </p>
                    </div>

                    {{-- For jaggako bibaran --}}
                    <div class="col-12 m-0 row">

                        <p><b>(ख) जग्गाको विवरण:</b><br></p>
                        <div class="col-2">
                            <p>किता नंवर:<br>
                                {{ $loanGivingVictim->applicationFinance->land_kitta }}
                            </p>
                        </div>
                        <div class="col-2">
                            <p>
                                क्षेत्रफल: <br>
                                {{ $loanGivingVictim->applicationFinance->land_area }}
                            </p>
                        </div>
                        <div class="col-2">
                            <p>
                                जिल्ला:<br>
                                {{ $getDistrictName($loanGivingVictim->applicationFinance->land_district) }},
                                {{ $getStateName($loanGivingVictim->applicationFinance->land_state) }} </p>
                        </div>
                        <div class="col-2">
                            <p>
                                न.पा./गा.पा.:<br>
                                {{ $getLocalName($loanGivingVictim->applicationFinance->land_local) }}
                            </p>
                        </div>
                        <div class="col-2">
                            <p>
                                वडा नं.: <br>
                                {{ $loanGivingVictim->applicationFinance->land_ward }}
                            </p>
                        </div>
                        <p>(नोट: एक भन्दा बढी ठाउँ /स्थानमा घर/जग्गा भएमा सोही बमोजिम सबै विवरण छुट्टै पानामा उल्लेख गर्ने)
                        </p>
                    </div>

                    <div class="col-12 m-0">
                        <p><b>(ग) सवारी साधनको विवरण: </b></p>
                        <p>{{ $loanGivingVictim->applicationFinance->vehicle_description }}:
                            {{ $loanGivingVictim->applicationFinance->vehicle_count }}</p>

                    </div>

                    <div class="col-12 m-0">
                        <p><b>(घ) चल सम्पत्तिको विवरण:</b></p>
                        <p>{{ $loanGivingVictim->applicationFinance->amount_asset_description }}:
                            {{ $loanGivingVictim->applicationFinance->amount_asset_count }}</p>
                        <p>बैङ्क तथा वित्तिय संस्था (सहकारी/लघुवित्त समेत) मा खोलिएको बैंक खाता विवरण :</p>
                        <p>संस्थाको नाम:{{ $loanGivingVictim->applicationFinance->finance_name }} </p>
                        <p>शाखा:{{ $loanGivingVictim->applicationFinance->finance_branch }} </p>
                        <p>खाता खोलेको मिति:{{ $loanGivingVictim->applicationFinance->finance_accountissue_date }}</p>
                        <p>बैंक मौज्दात:{{ $loanGivingVictim->applicationFinance->finance_data }} </p>
                        <p>(नोट : एक भन्दा बढि बैंक वा वित्तिय संस्थामा खाता खोलिएको भए विवरण उल्लेख गर्ने)</p>
                    </div>

                    <div class="col-12 m-0 row">
                        <p><b>(ङ) बैङ्क तथा वित्तिय संस्था (सहकारी/लघुवित्त समेत) बाट ऋण लिएको भए:</b></p>
                        <div class="col-4">
                            <p>(अ) संस्थाको नाम:{{ $loanGivingVictim->applicationFinance->loan_finance_name }} </p>
                        </div>
                        <div class="col-4">
                            <p>(आ) शाखा:{{ $loanGivingVictim->applicationFinance->loan_finance_branch }} </p>
                        </div>
                        <div class="col-4">
                            <p>(इ) कर्जाको दायित्व:{{ $loanGivingVictim->applicationFinance->loan_finance_liability }}</p>
                        </div>
                        <div class="col-12">
                            <p>(ई) तिर्न बाँकी कर्जा
                                रकम:{{ $loanGivingVictim->applicationFinance->loan_finance_remainingpay }} </p>
                        </div>
                    

                    </div>

                    <div class="col-12">
                        <p>(नोट : एक भन्दा बढि बैंक वा वित्तिय संस्थाबाट ऋण लिएको भए उल्लेख गर्ने)</p>
                    </div>


                </div>




                {{-- For  RIn Karja Lineko Bibaran --}}

                <div class="row border border-dark">
                    <p><b>२. ऋण/कर्जा लिने व्यक्तिको विवरण:</b></p>
                    <div class="col-12">
                        <p>(क) कर्जा लिने व्यक्तिको नाम, थर: {{ $loanGivingVictim->debtorDetails->debtor_name }}
                            ठेगाना: {{ $loanGivingVictim->debtorDetails->debtor_local }}</p>
                        <p>(ख) कर्जा कारोबार भएको मिति: {{ $loanGivingVictim->debtorDetails->debit_date }}</p>
                        <p>(ग) कर्जा कारोबार रकम: {{ $loanGivingVictim->debtorDetails->debit_amount }}</p>
                        <p>(घ) कारोबार गरेको माध्यम:(<i class="fa-solid fa-check"></i>)<br>

                            {{-- {{ $loanGivingVictim->debtorDetails->debit_medium }} --}}
                       
                            @php
                                $debitMedium = $loanGivingVictim->debtorDetails->debit_medium;
                                $values = explode(',', $debitMedium);
                                $formattedValues = implode('<br>', $values);
                            @endphp

                            {!! $formattedValues !!}
                        </p>


                        <p>(ङ) अन्य व्यक्तिलाई ऋण दिएको भए अन्य ऋणीको संख्या:
                            {{ $loanGivingVictim->debtorDetails->other_debtors_no }} &nbsp; &nbsp; कुल ऋण रकम
                            :{{ $loanGivingVictim->debtorDetails->other_debtors_amount }}</p>
                            <p>(च) सम्बन्धित वडा कार्यालयमा कर्जामा लिखत दर्ता
                                भएको <input type="radio" value="1" {{ $previouslyStoredCourtValue === true ? 'checked' : '' }}>
                                नभएको <input type="radio" value="0" {{ $previouslyStoredCourtValue === false ? 'checked' : '' }}>
                            &nbsp;&nbsp;भएको भए दर्ता नं. {{ $loanGivingVictim->debtorDetails->statement_register_no }}</p>
                    </div>
                </div>

                <div class="row border border-dark">
                    <p><b>३. यो लेनदेन कारोबारको रकमबाट हालसम्म प्राप्त गरेको ब्याज रकम:</b></p>
                    <div class="col-12 m-0">

                        <p>
                            @php
                                // Split trans_amount string into an array
                                $trans_amount_array = explode(',', $loanDetail->trans_amount);
                            @endphp
                        
                            @foreach ($data as $index => $value)
                                <span>
                                    <!-- Display the option value -->
                                    <span value="{{ $value }}">{{ $value }}</span>
                        
                                    <!-- Display the corresponding trans_amount if it exists -->
                                    @if (isset($trans_amount_array[$index]))
                                        {{ $trans_amount_array[$index] }}
                                    @endif
                                </span>
                            @endforeach
                        </p>
                        
                    </div>
                </div>


                <div class="row border border-dark">
                    <p><b>४. यो लेनदेन कारोबारको रकमबाट हालसम्म प्राप्त गरेको मुलधन रकम*:</b></p>
                    <div class="col-12 m-0">
                        <p>
                            @php
                                // Split trans_capital_amount string into an array
                                $trans_capital_amount_array = explode(',', $loanDetail->trans_capital_amount);
                            @endphp
                        
                            @foreach ($dataCapital as $index => $value)
                                <span>
                                    <!-- Display the option value and check if it should be selected -->
                                    <span value="{{ $value }}" @if ($loanDetail->trans_capital_medium == $value) @endif>
                                        {{ $value }}
                                    </span>
                        
                                    <!-- Display the corresponding trans_capital_amount if it exists -->
                                    @if (isset($trans_capital_amount_array[$index]))
                                        {{ $trans_capital_amount_array[$index] }}
                                    @endif
                                </span>
                            @endforeach
                        </p>
                        
                        
                    </div>
                </div>


                <div class="row border border-dark">
                    <p><b>५. उजुरी कर्ता सँग असुल गर्न बाँकी कर्जा रकम:</b></p>
                    <div class="col-6">
                        <p> सावाँ :{{ $loanGivingVictim->transactionRegistration->comp_amt_rem_prin }}</p>
                    </div>
                    <div class="col-6">
                        <p>
                            व्याज:{{ $loanGivingVictim->transactionRegistration->comp_amt_rem_interest }}
                        </p>
                    </div>
                </div>




                <div class="row border border-dark">
                    <p><b>६. ऋण/कर्जा दिएको बखत जग्गा राजिनामा/दृष्टिबन्धक पारित गरिएको भए:</b></p>
                    <div class="col-12 m-0">
                        <p>(क) साविकको जग्गा धनीको नाम, थर: {{ $loanGivingVictim->otherDetails->loan_landrestrict_owner }}
                        </p>
                        <p>(ख) ऋणीको नाम, थर: {{ $loanGivingVictim->otherDetails->loan_taking_person_name }}</p>
                        <p>(ग) जग्गा पारित गरी लिएको व्यक्तिको नाम,
                            थर:{{ $loanGivingVictim->otherDetails->land_passed_name }}</p>
                        <p>(घ) लिखत रजिष्ट्रेशन गराई लिने व्यक्तिसँग तपाईको नाता,
                            सम्बन्ध:{{ $loanGivingVictim->otherDetails->registered_person_relation }}</p>
                        <p>(ङ) जग्गाको किता नं :{{ $loanGivingVictim->otherDetails->landrestrict_kitta }} &nbsp; &nbsp;
                            क्षेत्रफल :{{ $loanGivingVictim->otherDetails->landrestrict_area }}</p>
                        <p>(च) जग्गा रहेको स्थान :{{ $getStateName($loanGivingVictim->otherDetails->landrestrict_state) }}
                            &nbsp; &nbsp; जिल्ला
                            :{{ $getDistrictName($loanGivingVictim->otherDetails->landrestrict_district) }} &nbsp;&nbsp;
                            न.पा./गा.पा
                            {{ $getLocalName($loanGivingVictim->otherDetails->landrestrict_local) }}&nbsp;&nbsp;
                            वडा नं. {{ $loanGivingVictim->otherDetails->landrestrict_ward }}</p>
                        <p>(छ) जग्गा रजिष्ट्रेशन भएको मिति
                            :{{ $loanGivingVictim->otherDetails->landrestrict_registration_date }}</p>
                    </div>
                </div>

                <div class="row border border-dark">
                    <p><b>७. ऋण/कर्जा दिएको बखत ऋणी सँग बैंक चेक लेखाई लिएको छ 
                        <input type="radio" name="cheque_shown" value="1" 
                               {{ $previouslyStoredValueForChequeShown == 1 ? 'checked' : 'disabled' }}> 
                        वा छैन 
                        <input type="radio" name="cheque_shown" value="0" 
                               {{ $previouslyStoredValueForChequeShown == 0 ? 'checked' : 'disabled' }}>
                        <br>
                       </b>
                    </p>
                
                    <div class="cheque-details" style="{{ $previouslyStoredValueForChequeShown == 1 ? '' : 'display:none;' }}">
                        <p><b>त्यस्तो चेक लिएको भए:</b></p>
                        <div class="col-12 m-0">
                            <p>(क) चेक उपलब्ध गराउने व्यक्तिको नाम, थर
                                :{{ optional($loanGivingVictim->otherDetails)->cheque_giving_person }}</p>
                            <p>(ख) चेक प्राप्त गर्ने व्यक्तिको नाम, थर
                                :{{ optional($loanGivingVictim->otherDetails)->cheque_receiving_person }}</p>
                            <p>(ग) चेक काटेको मिति :{{ optional($loanGivingVictim->otherDetails)->cheque_issue_date }}</p>
                            <p>(घ) चेक बाउन्स भएको मिति :{{ optional($loanGivingVictim->otherDetails)->cheque_bounce_date }}</p>
                            <p>(ङ) चेकमा उल्लेख भएको रकम :{{ optional($loanGivingVictim->otherDetails)->cheque_detail_amount }}</p>
                            <p>(च) चेक सम्बन्धी अन्य विवरण :{{ optional($loanGivingVictim->otherDetails)->cheque_other_details }}</p>
                        </div>
                    </div>
                </div>

                <div class="row border border-dark">
                    <p><b>८. ऋण/कर्जा कारोवारको सम्बन्धमा निज ऋणीको विरुद्धमा अदालतमा मुद्दा परेको छ <input type="radio"
                                value="1"
                                {{ $previouslyStoredValueForCourtCasePending == 1 ? 'checked' : 'disabled' }}>
                            छैन <input type="radio" value="0"
                                {{ $previouslyStoredValueForCourtCasePending == 0 ? 'checked' : 'disabled' }}></b></p>

                    <div class="col-12 m-0">
                        <p>(क)अदालतमा मुद्दा दायर भएको भए हालको अवस्था:
                            {{ $loanGivingVictim->otherDetails->court_case_state_name }}</p>
                        <p>(ख) मुद्दाको विषय र मुद्दा नं :{{ $loanGivingVictim->otherDetails->court_case_subject }}</p>
                        <p>(ग) नपुग बिगो वापत ऋणि कैदमा रहेको अवस्था छ <input type="radio" value="1"
                                {{ $previouslyStoredValueForPersonJail == 1 ? 'checked' : 'disabled' }}> छैन <input
                                type="radio" value="0"
                                {{ $previouslyStoredValueForPersonJail == 0 ? 'checked' : 'disabled' }}>
                        </p>

                    </div>
                </div>




                <div class="row border border-dark">
                    <p><b>९. अदालतबाट मुद्दा फैसला भइसकेको भए (<i class="fa-solid fa-check"></i>)</b></p>
                    <div class="col-12 m-0">

                        <p>(क) विगो भराउने/जरिवाना/कैद तीनै प्रकारको सजाय भएको <input type="radio" value="1"
                                {{ $previouslyStoredValueForCourtDecision == 1 ? 'checked' : 'disabled' }}></p>
                        <p>(ख) बिगो भराउने र जरिवाना मात्र भएको <input type="radio" value="0"
                                {{ $previouslyStoredValueForCourtDecision == 0 ? 'checked' : 'disabled' }}></p>

                    </div>
                </div>


                <div class="row border border-dark">
                    <p><b>१०. कर्जा लेनदेनको क्रममा दृष्टिबन्धक/राजीनामा पारित गरेको भए घर/जग्गा हाल कसले भोगचलन गरिरहेको
                            छ?</b></p>
                    <div class="col-12 m-0">
                        <p>{{ $loanGivingVictim->otherDetails->landrestricted_usedby_now }}</p>
                    </div>
                </div>



                <div class="row border border-dark">
                    <p><b>११. रजिष्ट्रेशन पारित गर्दा छुट्टै शर्तनामाको कागज गरिएको थियो <input type="radio"
                                value="1" {{ $previouslyStoredValue == 1 ? 'checked' : 'disabled' }}> थिएन <input
                                type="radio" value="0" {{ $previouslyStoredValue == 0 ? 'checked' : 'disabled' }}>
                            गरिएको भए के शर्त राखिएको थियो?</b></p>

                    <div class="col-12 m-0">
                        <p>{{ $loanGivingVictim->otherDetails->when_registered_othercondition_name }}</p>
                    </div>
                </div>




                <div class="row border border-dark">
                    <p><b>१२. यो लेनदेन सम्बन्धमा अन्य केही कुरा खुलाउनुपर्ने भए?</b></p>

                    <div class="col-12 m-0">
                        <p> {{ $loanGivingVictim->otherDetails->other_details_in_transaction }}</p>
                    </div>
                </div>



                <div class="row border border-dark">
                    <p>१३. यो निवेदनको ब्यहोरा पुष्टि गर्ने निम्न कागजातहरु (लिखत/तमसुक समेत) फोटोकपी यसैसाथ संलग्न गरेको
                        छु।</p>

                    <div class="col-12 m-0">
                        <p>{{ $loanGivingVictim->otherDetails->application_attached_documents }}</p>
                    </div>
                </div>



                <div class="row border border-dark">
                    <p><b>१४. माथि लेखिएको व्यहोरा मैले जाने बुझेसम्म ठिक साँचो हो। यसमा फरक परे कानून बमोजिम सहुँला
                            बुझाउँला
                            भनी सहीछाप गरिदिए</b></p>
                    <div class="col-6">
                        <b>ल्याप्चे सहीछाप:</b><br>
                        <table border="1">
                            <tr>
                                <th class="px-5 border border-dark">दायाँ</th>
                                <th class="px-5 border border-dark">बाँयाँ</th>
                            </tr>
                            <tr>
                                <th class=" border border-dark"><br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6">
                        <p>सहीछाप गर्नेको नाम थर: {{ $loanGivingVictim->otherDetails->stamped_name }}
                            <br>
                            हस्ताक्षर: {{ $loanGivingVictim->otherDetails->stamped_name }}
                            <br>
                            मिति:{{ $loanGivingVictim->otherDetails->stamped_date }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

                <div class="container">
                    <!-- Print Button -->
                    <div class="text-center mt-2 mb-2">
                        <button onclick="printPage()" class="btn btn-primary">
                            <i class="fa fa-print"></i> Print
                        </button>
                    </div>
                </div>
                <script>
                    function printPage() {
                        var printContent = document.getElementById('printableArea').innerHTML;
                        var originalContent = document.body.innerHTML;
                        document.body.innerHTML = printContent;
                        window.print();
                        document.body.innerHTML = originalContent;
                    }
                </script>
            @endsection
