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
        {{-- For Applicant Detail --}}
       
        <div class="container">
                <h3 class="text-center">अनुचित लेनदेन (मिटरब्याज) सम्बन्धी पीडितले भर्ने निवेदन फारम [फारम नं १ ]</h3>
            <div class="row border border-dark">
                <div class="col-8 border border-dark m-0">
                    <p><b>१. निवेदक(ऋण/कर्जा लिने व्यक्ति) को विवरण:</b></p>
                </div>

                <div class="col-4 border border-bottom border-dark m-0">
                    <p><b>सम्बन्धित कार्यालयले भर्ने:</b></p>
                </div>

                <div class="col-8 row border border-dark m-0">
                    <div class="col-8">
                        <p>नाम, थर*: {{ $loanTakingVictim->basicDetailRegistration->applicant_name }}</p>
                    </div>
                    <div class="col-4">
                        <p>उमेर: {{ $loanTakingVictim->basicDetailRegistration->applicant_age }}</p>
                    </div>
                </div>

                <div class="col-4 border border-dark m-0">
                    <p>
                        दर्ता नं.: {{ $loanTakingVictim->applicationRegistration->registration_id }} <br>
                        दर्ता मिति: {{ $loanTakingVictim->applicationRegistration->registration_date }}<br>
                        कार्यालय: {{ $loanTakingVictim->applicationRegistration->registration_office }}
                    </p>
                </div>

                <div class="col-6 row border border-dark m-0">
                    <div class="col-7">
                        <p>नागरिकता नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_citizenship }}</p>
                    </div>
                    <div class="col-5">
                        <p>जिल्ला: {{ $getDistrictName($loanTakingVictim->basicDetailRegistration->applicant_citizenship_issue_district) }}
                        </p>
                    </div>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>जारी मिति: {{ $loanTakingVictim->basicDetailRegistration->applicant_citizenship_issue_date }}</p>
                </div>

                <div class="col-6 border border-dark m-0">
                    <p>पिताको नाम, थर*: {{ $loanTakingVictim->basicDetailRegistration->applicant_fathername }}</p>
                </div>

                <div class="col-6 border border-dark m-0">
                    <p>फोन/मोबाईल नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_fathers_no }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>पति/पत्नीको नाम थर: {{ $loanTakingVictim->basicDetailRegistration->applicant_spouse }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>फोन/मोबाईल नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_spouse_no }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>सगोल परिवारको सदस्य संख्या: {{ $loanTakingVictim->basicDetailRegistration->applicant_family }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>वार्षिक आम्दानी: {{ $loanTakingVictim->basicDetailRegistration->applicant_annual_income }}</p>
                </div>
                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6 m-0">
                        <p>स्थायी ठेगाना*:
                            <br>
                            प्रदेश:
                            {{ $getStateName($loanTakingVictim->basicDetailRegistration->applicant_permanent_state) }}
                        </p>
                    </div>
                    <div class="col-6 m-0">
                        <br>
                        <p>जिल्ला:
                            {{ $getDistrictName($loanTakingVictim->basicDetailRegistration->applicant_permanent_district) }}
                        </p>
                    </div>
                </div>
                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            हाल बसोबासको ठेगाना:
                            <br>
                            प्रदेश: 
                             {{ $getStateName($loanTakingVictim->basicDetailRegistration->applicant_temp_state) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <br>
                        <p>जिल्ला:
                            {{ $getDistrictName($loanTakingVictim->basicDetailRegistration->applicant_temp_district) }}</p>
                    </div>

                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            न.पा./गा.पा:
                            {{ $getLocalName($loanTakingVictim->basicDetailRegistration->applicant_permanent_local) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p>वडा नं.: {{ $loanTakingVictim->basicDetailRegistration->applicant_permanent_ward }}</p>
                    </div>
                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            न.पा./गा.पा:
                            {{ $getLocalName($loanTakingVictim->basicDetailRegistration->applicant_temp_local) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p>वडा नं.: {{ $loanTakingVictim->basicDetailRegistration->applicant_temp_ward }}</p>
                    </div>

                </div>
                <div class="col-6 border border-dark m-0">
                    <p>(PAN) नं. : {{ $loanTakingVictim->basicDetailRegistration->applicant_pan }}</p>
                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>पेशा/व्यवसाय: {{ $loanTakingVictim->basicDetailRegistration->applicant_occup }}</p>
                    </div>
                    <div class="col-6">
                        <p>शैक्षिक योग्यता: {{ $loanTakingVictim->basicDetailRegistration->applicant_edu }}</p>
                    </div>
                </div>

            </div>
            {{-- For Bipakshi Detail --}}

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0 row">
                    <div class="col-6">
                        <p><b>२. विपक्षी (ऋण/कर्जा दिने व्यक्ति) को विवरण:</b><br>
                            नाम, थर*: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_name }}
                        </p>
                    </div>

                    <div class="col-6">
                        <br>
                        <p>उमेर: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_age }}</p>
                    </div>

                </div>


                <div class="col-6 border border-dark m-0">
                    <p>पिताको नाम, थर: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_fathername }}</p>
                </div>

                <div class="col-6 border border-dark m-0">
                    <p>फोन/मोबाईल नं: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_fathers_no }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>पति/पत्नीको नाम थर: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_spouse }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>फोन/मोबाईल नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_spouse_no }}</p>
                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6 m-0">
                        <p>स्थायी ठेगाना:
                            <br>
                            प्रदेश:
                            {{ $getStateName($loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_state) }}
                        </p>
                    </div>
                    <div class="col-6 m-0">
                        <br>
                        <p>जिल्ला:
                            {{ $getDistrictName($loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_district) }}
                        </p>                        
                    </div>
                </div>
                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            हाल बसोबासको ठेगाना:
                            <br>
                            प्रदेश:
                            {{ $getStateName($loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_state) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <br>
                        <p>जिल्ला:
                            {{ $getDistrictName($loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_district) }}
                        </p>
                    </div>

                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            न.पा./गा.पा:
                            {{ $getLocalName($loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_local) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p>वडा नं.: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_ward }}</p>
                    </div>
                </div>

                <div class="col-6 border border-dark m-0 row">
                    <div class="col-6">
                        <p>
                            न.पा./गा.पा:
                            {{ $getLocalName($loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_local) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p>वडा नं.: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_ward }}</p>
                    </div>

                </div>
                <div class="col-6 border border-dark m-0">
                    <p>पेशा/व्यवसाय: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_occupation }}</p>
                </div>
                <div class="col-6 border border-dark m-0">
                    <p>शैक्षिक योग्यता: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_education_level }}
                    </p>
                </div>



            </div>

         
            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0 row">
                    <p>
                        <b>३. ऋण/कर्जा कारोबारको विवरण:</b>
                    </p>
                    <p>
                        (क) ऋण लिनुपर्ने कारण/प्रयोजन(<i class="fa-solid fa-check"></i>): <br>
                        {{-- {{ $loanTakingVictim->loanDetail->loan_purpose }} --}}
                        @php
                            $loanPurpose = $loanTakingVictim->loanDetail->loan_purpose;
                            $values = explode(',', $loanPurpose);
                            $formattedValues = implode('<br>', $values);
                        @endphp
                        {!! $formattedValues !!}

                    </p>

                    <p>
                        (ख)कर्जा/ऋण कारोबार भएको मिति: {{ $loanTakingVictim->loanDetail->loan_date }}
                    </p>
                    <p>
                        (ग)कर्जा/ऋण कारोबार भएको स्थान: {{ $loanTakingVictim->loanDetail->loan_location }}
                    </p>
                    <p>
                        (घ)कर्जा/ऋण कारोबार भएको रकम:{{ $loanTakingVictim->loanDetail->loan_amount }}
                    </p>

                    <p>
                        (ङ)कर्जा/ऋण कारोबार हुँदाका बखतका साक्षीहरु* <br>

                        {{ $loanTakingVictim->loanDetail->loan_witness }}
                    </p>


                    <div class="col-7">
                        <p>लिखत लेख्ने व्यक्तिको नाम, थर : {{ $loanTakingVictim->loanDetail->loan_docs_write }}</p>
                    </div>
                    <div class="col-5">
                        <p>ठेगाना: {{ $loanTakingVictim->loanDetail->loan_docs_address }}</p>
                    </div>

                </div>
            </div>

            {{-- For Rin/Karjako Madhyam  --}}

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>४. ऋण/कर्जा लिएको माध्यम* </b>(<i class="fa-solid fa-check"></i>) <br>
                        {{ $loanTakingVictim->loanDetail->loan_medium }}
                    </p>
                </div>
            </div>

            

            {{-- For Rin/Karja linda bakhatko bibaran --}}

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>५. ऋण/कर्जा लिँदाका बखतका विवरण तथा शर्तहरु*:</b>
                    </p>
                    <p> (क) कर्जा लिँदा तमसुक/लिखत/सम्झौता
                        <input type="radio" value="1"
                            {{ $previouslyStoredValueForLoanDocs == '1' ? 'checked' : 'disabled' }}> भएको
                        <input type="radio" value="0"
                            {{ $previouslyStoredValueForLoanDocs == '0' ? 'checked' : 'disabled' }}> नभएको
                    </p>
                    <p>
                        (अ) लेनदेन भएको रकम र तमसुकमा उल्लेख भएको रकम समान
                        <input type="radio" value="1"
                            {{ $previouslyStoredValueForLoanSame == '1' ? 'checked' : 'disabled' }}> भएको
                        <input type="radio" value="0"
                            {{ $previouslyStoredValueForLoanSame == '0' ? 'checked' : 'disabled' }}> नभएको

                    </p>
                    <p>
                        (आ)लिखत/तमसुकमा उल्लेख भएको रकम : {{ $loanTakingVictim->loanDetail->loan_tamasuk_amount }}
                    </p>
                    <p>
                        (इ)ऋण/कर्जा कारोबार भएको वास्तविक रकम:
                        {{ $loanTakingVictim->loanDetail->loan_transaction_actual_amount }}
                    </p>
                    <p>
                        (ई)ऋण लिँदा सही छाप मात्र गरी धनिलाई खाली चेक दिएको <input type="radio" value="1"
                            {{ $previouslyStoredValueForLoanStamp == '1' ? 'checked' : 'disabled' }}>
                        नदिएको <input type="radio" value="1"
                            {{ $previouslyStoredValueForLoanStamp == '0' ? 'checked' : 'disabled' }}>
                    </p>
                    <p>
                        (उ)धनी/साहुलाई रकम उल्लेख भएको चेक दिएको भए, चेकमा के कति रकम भरेको हो?
                        {{ $loanTakingVictim->loanDetail->taken_loan_stamp_amount }}
                    </p>
                    <p>
                        (ऊ) लिखत/तमसुक परिवर्तन गरेको <input type="radio" value="1"
                            {{ $previouslyStoredValue == '1' ? 'checked' : 'disabled' }}>
                        नगरेको <input type="radio" value="0"
                            {{ $previouslyStoredValue == '0' ? 'checked' : 'disabled' }}>
                    </p>

                    <p>
                        (ख) जग्गा राजिनामा पारीत गरी दिई ऋण/कर्जा लिएको सम्बन्धमा:

                    </p>
                    <p>
                        (अ)जग्गा फिर्ता गर्ने शर्त राखिएको थियो <input type="radio" value="1"
                            {{ $previouslyStoredValueForLandReturn == '1' ? 'checked' : 'disabled' }}>
                        राखिएको थिएन <input type="radio" value="0"
                            {{ $previouslyStoredValueForLandReturn == '0' ? 'checked' : 'disabled' }}>
                    </p>
                    <p>
                        (आ)</b> कुनै अर्को शर्त राखेर अर्को लिखत/तमसुक खडा गरिएको थियो <input type="radio" value="1"
                            {{ $previouslyStoredValueForOtherReturnPromise == '1' ? 'checked' : 'disabled' }}>
                        थिएन <input type="radio" value="0"
                            {{ $previouslyStoredValueForOtherReturnPromise == '0' ? 'checked' : 'disabled' }}>

                    </p>

                    <p>
                        (ग)हाल सो जग्गाको भोग कसले गरिरहेको छ?
                        <br>{{ $loanTakingVictim->loanDetail->land_rights_possessed_by_whome }}
                        <br>
                        @if ($loanTakingVictim->loanDetail->land_rights_possessed_by_whome == 'अन्य व्यक्ति')
                            अन्य व्यक्ति भए निजको नाम, थर: {{ $loanTakingVictim->loanDetail->land_used_by_name }}
                            <br>
                            ठेगाना: {{ $loanTakingVictim->loanDetail->land_used_by_address }}
                        @endif
                    </p>
                   
                    <p>
                        (घ)जग्गा दृष्टिबन्धक गरी पारित गरिदिई ऋण/कर्जा लिएकोमा:
                    </p>
                    <p>
                        (अ)जग्गा दृष्टिबन्धक लिखत गर्दा अन्य केही शर्त राखिएको थियो <input type="radio" value="1"
                            {{ $previouslyStoredValueForLandStopPromise == '1' ? 'checked' : 'disabled' }}>
                        थिएन <input type="radio" value="0"
                            {{ $previouslyStoredValueForLandStopPromise == '0' ? 'checked' : 'disabled' }}>
                    </p>

                    <p>
                        (आ)शर्त राखिएको भए के शर्त राखिएको थियो?
                        {{ optional($loanTakingVictim->loanDetail)->land_stop_promise_state }}
                    </p>


                    <p>(इ) उक्त दृष्टिबन्धक राखिएको जग्गाको भोग चलन कसले गरिरहेको छ?
                        {{ $loanTakingVictim->loanDetail->land_stop_promise_who_name }}
                        @if ($loanTakingVictim->loanDetail->land_stop_promise_who_name == 'अन्य व्यक्ति')
                            <br>
                            अन्य व्यक्ति भए निजको नाम, थर:
                            {{ $loanTakingVictim->loanDetail->land_stop_promise_used_by_name }}
                            ठेगाना: {{ $loanTakingVictim->loanDetail->land_stop_promise_used_by_address }}
                        @endif
                    </p>
                   
                    <p>
                        (ङ)तमसुक/शर्तनामामा जमानी राखेको भए:
                    </p>
                    <p>
                        (क)जमानी बस्नेको कुनै शर्त थियो <input type="radio" value="1"
                            {{ $previouslyStoredValueForWitnessAnyPromise == '1' ? 'checked' : 'disabled' }}>
                        थिएन <input type="radio" value="0"
                            {{ $previouslyStoredValueForWitnessAnyPromise == '0' ? 'checked' : 'disabled' }}>
                        @if ($previouslyStoredValueForWitnessAnyPromise == '1')
                    </p>
                    <p>
                        (ख)</b> शर्त थियो भने के थियो?:
                        {{ optional($loanTakingVictim->loanDetail)->witness_any_promise_state }}
                        @endif
                    </p>
                </div>
            </div>



           
            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>६. लिखत/तमसुकमा उल्लेख भएको मुलधन र ब्याज सम्बन्धमा*:</b>
                    </p>

                    <p>
                        (क) लिखत/तमसुकमा उल्लेख भएको ब्याजदर प्रतिशत:
                        {{ $loanTakingVictim->interestDetail->written_docs_interest_rate }}
                    </p>

                    <p>
                        (ख) बुझाउने/बुझाएको ब्याजदर प्रतिशत:
                        {{ $loanTakingVictim->interestDetail->written_docs_given_interest_rate }}
                    </p>

                    <p>
                        (ग) हाल सम्म बुझाएको ब्याज रकम: {{ $loanTakingVictim->interestDetail->till_now_interest_amount }}
                    </p>
                    <p>
                        (घ)ब्याज बुझाएको माध्यम
                        {{-- {{ $loanTakingVictim->interestDetail->interest_paid_medium }} --}}
                        @php
                            $interestPaidMedium = $loanTakingVictim->interestDetail->interest_paid_medium;
                            $values = explode(',', $interestPaidMedium);
                            $formattedValues = implode('<br>', $values);
                        @endphp

                    {!! $formattedValues !!}
                    </p>

                    <p>
                        (ङ)हालसम्म बुझाएको मूल धन वापतको रकम:
                        {{ $loanTakingVictim->interestDetail->till_now_paid_capital }}
                    </p>
                    <p>
                        (च)बुझाउन बाँकी रकम: {{ $loanTakingVictim->interestDetail->till_now_to_be_paid_amount }}
                    </p>

                    <p>
                        (छ)लिखत वडा कार्यालयमा दर्ता भएको <input type="radio" value="1"
                            {{ $previouslyStoredValue == '1' ? 'checked' : 'disabled' }}>
                        नभएको <input type="radio" value="0"
                            {{ $previouslyStoredValue == '0' ? 'checked' : 'disabled' }}>
                    </p>
                </div>
            </div>

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>७. तमसुक/लिखित अनुसार ऋण/कर्जा सावाँ ब्याज बुझाउने अन्तिम म्याद (भाखा)*</b>
                        {{ $loanTakingVictim->interestDetail->loan_amount_pay_last_date }}
                    </p>

                </div>
            </div>

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>८. ऋण/कर्जा कारोवारको सम्बन्धमा अदालतमा मुद्दा परेको* छ<input type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            छैन <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}></b>
                    </p>
                    @if ($previouslyStoredCourtValue == '1')
                        <p>
                            (क)अदालतमा मुद्दा दायर भएको भए:
                            {{ $loanTakingVictim->courtDetail->issue_in_court_result }}
                        </p>

                        <p>
                            (ख) मुद्दाको विषय: {{ $loanTakingVictim->courtDetail->issue_in_court_subject }}
                            मुद्दा नं: {{ $loanTakingVictim->courtDetail->issue_in_court_subject_no }}
                        </p>

                </div>
            </div>

            {{-- Mudda pareko --}}
            {{-- <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>९. अदालतको फैसलाको अवस्था:</b>
                    </p>
                    <p>
                    <ul>
                        <li>(क) फैसला बमोजिम भरीभराउ भई पीडितको अचल सम्पत्ति डाँक लिलाम भएको <input type="radio"
                                value="1" {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नभएको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>
                        </li>
                        <li>(ख) डाँक लिलाममा उक्त अचल सम्पत्ति कसले सकार गरेको हो?
                            नाम, थर: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_name }}
                            ठेगाना: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_address }}
                        </li>
                        <li>(ग) फैसला बमोजिम रकम असुल उपर गर्न सम्पत्ति नभएकोले थुनामा राखी पाऊ भन्ने निवेदन परेको
                            <input type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नपरेको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>
                        </li>
                        <li>(घ) थुनामा राख्ने आदेश भएको <input type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नभएको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}> </li>
                        @if ($previouslyStoredCourtValue == '1')
                            <li>(ङ) थुनामा गैसकेको भए थुनामा गएको मिति
                                {{ $loanTakingVictim->courtDetail->if_in_jail_start_date }} र थुनामा बस्नुपर्ने
                                अवधि {{ $loanTakingVictim->courtDetail->if_in_jail_start_duration }}</li>
                        @endif
                       
                    </ul>
                    </p>
                </div>
            </div> --}}

            {{--  --}}
            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p>
                        <b>९. अदालतको फैसलाको अवस्था:</b>
                    </p>
                 
                        <p>(क)फैसला बमोजिम भरीभराउ भई पीडितको अचल सम्पत्ति डाँक लिलाम भएको <input type="radio"
                                value="1" {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नभएको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>
                        </p>
                        <p>(ख) डाँक लिलाममा उक्त अचल सम्पत्ति कसले सकार गरेको हो?
                            नाम, थर: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_name }}
                            ठेगाना: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_address }}
                        </p>
                        <p>(ग) फैसला बमोजिम रकम असुल उपर गर्न सम्पत्ति नभएकोले थुनामा राखी पाऊ भन्ने निवेदन परेको <input
                                type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नपरेको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>
                        </p>
                        <p>(घ) थुनामा राख्ने आदेश भएको <input type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नभएको <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}> </p>
                        @if ($previouslyStoredCourtValue == '1')
                            <p>(ङ) थुनामा गैसकेको भए थुनामा गएको मिति
                                {{ $loanTakingVictim->courtDetail->if_in_jail_start_date }} र थुनामा बस्नुपर्ने
                                अवधि {{ $loanTakingVictim->courtDetail->if_in_jail_start_duration }}</p>
                        @endif
                        @endif
                 
                   
                </div>
            </div>

            <div class="row border border-dark">
                <div class="col-12 border border-dark m-0">
                    <p><b>१०. ऋणी उपर चेक बाउन्स सम्बन्धी मुद्दा भएको
                            <input type="radio" value="1"
                                {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}>
                            नभएको
                            <input type="radio" value="0"
                                {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>

                            @if ($previouslyStoredCourtValue == '1')
                                भए त्यो मुद्दाको अवस्था*:
                        </b> <br>
                        (क) {{ $loanTakingVictim->courtDetail->cheque_bounce_case_result }}</p>

                       <p>
                        @if ($loanTakingVictim->courtDetail->cheque_bounce_case_result == 'फैसलाले विगो भराएर जरिवाना र कैद समेत हुने ठहराएको छ')
                            <span>
                                सो फैसला भएको भए बिगो:
                                {{ $loanTakingVictim->courtDetail->case_result_bigo }}
                            </span>
                            <span>
                                जरिवाना:
                                {{ $loanTakingVictim->courtDetail->case_result_fine }}
                            </span>
                            <span>
                                कैद:
                                {{ $loanTakingVictim->courtDetail->case_result_jail }}
                            </span>
                        @endif

                        (ङ) फैसला भएको भए कार्यान्वयनको
                        अवस्था:{{ $loanTakingVictim->courtDetail->if_bank_cheque_case_resulted }}
                        @endif


                    </p>
                </div>
            </div>


           
            <div class="row border border-dark">
                <div class="col-12 m-0">
                    <p><b>११. निवेदकको (ऋण/कर्जा लिने व्यक्ति) आर्थिक अवस्था*:</b></p>

                    <p><b>(क) घरको विवरण:</b></p>

                    <p><b>(अ)</b> घरको संख्या: {{ $loanTakingVictim->additionalDetail->applicant_house_no }}</p>
                    <p><b>(आ)</b> घरले चर्चेको जग्गाको क्षेत्रफल:
                        {{ $loanTakingVictim->additionalDetail->applicant_house_area }}</p>
                    <p><b>(इ)</b> घरको किसिम (कच्ची/पक्की):
                        {{ $loanTakingVictim->additionalDetail->applicant_house_type }}</p>
                    <p><b>(ई)</b> घरको तला: {{ $loanTakingVictim->additionalDetail->applicant_house_storeyed }}</p>
                    <p><b>(उ)</b> घर रहेको स्थान:

                        <span>प्रदेश:
                            {{ $getStateName($loanTakingVictim->additionalDetail->applicant_house_state) }}</span>
                        <span>जिल्ला:
                            {{ $getDistrictName($loanTakingVictim->additionalDetail->applicant_house_district) }}
                        </span>
                        <span>न.पा./गा.पा:
                            {{ $getLocalName($loanTakingVictim->additionalDetail->applicant_house_local) }} </span>
                        <span>वडा नं: {{ $loanTakingVictim->additionalDetail->applicant_house_ward }}</span>
                    </p>
                </div>

                <div class="col-12 m-0 row">

                    <p><b>(ख) जग्गाको विवरण:</b><br></p>
                    <div class="col-2">
                        <p>किता नंवर:<br>
                            {{ $loanTakingVictim->additionalDetail->applicant_land_kitta_no }}
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            क्षेत्रफल: <br>
                            {{ $loanTakingVictim->additionalDetail->applicant_land_area }}
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            जिल्ला:<br>
                            {{ $getStateName($loanTakingVictim->additionalDetail->applicant_land_state)  }},
                            {{ $getDistrictName($loanTakingVictim->additionalDetail->applicant_land_state) }}
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            न.पा./गा.पा.:<br>
                            {{ $getLocalName($loanTakingVictim->additionalDetail->applicant_land_district) }}
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            वडा नं.: <br>
                            {{ $loanTakingVictim->additionalDetail->applicant_land_ward }}
                        </p>
                    </div>
                    <p>(नोट: एक भन्दा बढी ठाउँ /स्थानमा घर/जग्गा भएमा सोही बमोजिम सबै विवरण छुट्टै पानामा उल्लेख गर्ने)</p>
                </div>


                <div class="col-12 m-0">
                    <p>
                        <b>(ग) सवारी साधनको विवरण: </b>
                        {{ optional($loanTakingVictim->additionalDetail)->applicant_vehicle_details }}
                    </p>
                </div>
                <div class="col-12 m-0">
                    <p>
                        <b>(घ) चल सम्पत्तिको विवरण:
                        </b>{{ optional($loanTakingVictim->additionalDetail)->applicant_current_asset_details }}
                    </p>
                </div>

                <div class="col-12 m-0">
                    <p>
                        <b>(ङ) बैंक तथा वित्तिय संस्था (सहकारी/लघुवित्त समेत) मा खोलिएको बैंक खाता विवरण: </b>
                    </p>
                 
                        <p>(अ) बैंक तथा वित्तिय संस्था को नाम
                            {{ optional($loanTakingVictim->additionalDetail)->applicant_current_asset_details }}</p>
                        <p>(आ) शाखा/उपाशाखा
                            {{ optional($loanTakingVictim->additionalDetail)->applicant_finance_org_branch }}</p>
                        <p>(इ) खाता खोलेको मिति
                            {{ optional($loanTakingVictim->additionalDetail)->applicant_account_opening_date }}</p>
                        <p>(ई) खातामा मैज्दात रकम
                            {{ optional($loanTakingVictim->additionalDetail)->applicant_finance_amoun }}</p>
                    
                </div>

            </div>



            <div class="row border border-dark">
                <div class="col-12 m-0">
                    <p><b>१२. यो कर्जा कारोवारको सम्बन्धमा पीडितले मुलुकी अपराध संहिता, २०७४ को दफा २४९ क.(अनुचित लेनदेन गर्न
                            नहुने) अनुसार सम्बन्धित प्रहरी कार्यालयमा उजुरी/जाहेरी दिएको
                        </b>छ<input type="radio" value="1"
                            {{ $loanTakingVictim->additionalDetail->is_crime_reported == '1' ? 'checked' : 'disabled' }}>
                        छैन
                        <input type="radio" value="0"
                            {{ $loanTakingVictim->additionalDetail->is_crime_reported == '0' ? 'checked' : 'disabled' }}>
                        <br>


                        @if ($loanTakingVictim->additionalDetail->is_crime_reported == '1')
                            <b>(क)</b> उजुरी/जाहेरी दिएको भए*:<br>



                            <p>
                                <b> सो मुद्दा कुन अवस्थामा छ?</b><br>
                                {{ $loanTakingVictim->additionalDetail->if_crime_reported }}
                            </p>
                        @endif

                </div>
            </div>


            <div class="row border border-dark">
                <div class="col-12 m-0">
                    <p><b>१३. यो लेनदेनको सावाँ र ब्याजको सम्बन्धमा अन्य केही कुरा खुलाउनुपर्ने भए?</b>
                        {{ $loanTakingVictim->additionalDetail->transaction_actual_interest }}</p>
                </div>
            </div>



            <div class="row border border-dark">
                <div class="col-12 m-0">
                    <p><b>१४. यो निवेदनको ब्यहोरा पुष्टि गर्ने निम्न कागजातको फोटोकपी यसैसाथ संलग्न गरेको छु।</b><br>
                        {{ optional($loanTakingVictim->additionalDetail)->application_verifying_document }}
                    </p>
                </div>
            </div>


        

            <div class="row border border-dark">
                <div class="col-12 m-0">
                    <p><b>१५. माथि लेखिएको व्यहोरा मैले जाने बुझेसम्म ठिक साँचो हो। यसमा फरक परे कानून बमोजिम सहुँला
                            बुझाउँला भनी
                            सहीछाप गरिदिए</b></p>
                </div>


                <div class="col-6">
                    <b>ल्याप्चे सहीछाप:</b><br>
                    <table border="1" class="mb-2">
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
                    <p>सहीछाप गर्नेको नाम थर: {{ $loanTakingVictim->additionalDetail->stamp_person_name }}
                        <br>
                        हस्ताक्षर:...................................
                        <br>
                        मिति: {{ $loanTakingVictim->additionalDetail->stamp_date }}
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





{{-- Just In case --}}

{{-- 
    
    
          {{-- <div id="printableArea">
    <h1 class="text-center">अनुचित लेनदेन (मिटरब्याज) सम्बन्धी पीडितले भर्ने निवेदन फारम [फारम नं १ ]</h1>
   
        <ol>
            <b>
                <li>निवेदक(ऋण/कर्जा लिने व्यक्ति) को विवरण:</li>
            </b>
            <table class="table border">


                <tbody>
                    <tr>
                        <td>नाम, थर : {{ $loanTakingVictim->basicDetailRegistration->applicant_name}}</td>
                        <td>उमेर : {{ $loanTakingVictim->basicDetailRegistration->applicant_age }}
                        </td>
                    </tr>
                    <tr>
                        <td>नागरिकता नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_citizenship}}</td>

                        <td>जिल्ला: {{ $loanTakingVictim->basicDetailRegistration->applicant_citizenship_issue_district }}
                        </td>
                        <td>
                            जारी मिति:  {{ $loanTakingVictim->basicDetailRegistration->applicant_citizenship_issue_date }}</td>
                    </tr>
                    <tr>
                        <td>बुवाको नाम, थर : {{ $loanTakingVictim->basicDetailRegistration->applicant_fathername}}</td>
                        <td>फोन/मोबाईल नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_fathers_no }}</td>
                    </tr>
                    <tr>
                        <td>पति/पत्नीको नाम थर: {{ $loanTakingVictim->basicDetailRegistration->applicant_spouse }}</td>
                        <td>फोन/मोबाईल नं: {{ $loanTakingVictim->basicDetailRegistration->applicant_spouse_no }}</td>
                    </tr>
                    <tr>
                        <td>सगोल परिवारको सदस्य संख्या: {{ $loanTakingVictim->basicDetailRegistration->applicant_family}}</td>
                        <td>वार्षिक आम्दानी: {{ $loanTakingVictim->basicDetailRegistration->applicant_annual_income }}</td>
                    </tr>
                    <tr>
                        <td>स्थायी ठेगाना:
                            <br>
                            प्रदेश: {{ $getLocalName($loanTakingVictim->basicDetailRegistration->applicant_permanent_state ) }}
                            जिल्ला: {{ $getDistrictName ($loanTakingVictim->basicDetailRegistration->applicant_permanent_district)  }}
                        </td>
                        
                        <td>हाल बसोबासको ठेगाना:
                            <br>
                            प्रदेश:{{$getLocalName ($loanTakingVictim->basicDetailRegistration->applicant_temp_state)  }}
                            जिल्ला: {{$getDistrictName($loanTakingVictim->basicDetailRegistration->applicant_temp_district)}}
                        </td>
                    </tr>
                    <tr>
                        <td>न.पा./गा.पा:{{$getLocalName( $loanTakingVictim->basicDetailRegistration->applicant_permanent_local)}}  वडा नं.: {{ $loanTakingVictim->basicDetailRegistration->applicant_permanent_ward}}</td>
                        <td>न.पा./गा.पा: {{$getLocalName( $loanTakingVictim->basicDetailRegistration->applicant_temp_local)}} वडा नं.: {{ $loanTakingVictim->basicDetailRegistration->applicant_temp_ward}}</td>
                    </tr>
                    <tr>
                        <td>(PAN) नं. : {{$loanTakingVictim->basicDetailRegistration->applicant_pan}}</td>
                        <td>पेशा/व्यवसाय: {{ $loanTakingVictim->basicDetailRegistration->applicant_occup}}</td>
                        <td>शैक्षिक योग्यता: {{ $loanTakingVictim->basicDetailRegistration->applicant_edu}}</td>
                    </tr>
                </tbody>
            </table>
            <b>
                <li>विपक्षी(ऋण/कर्जा दिने  व्यक्ति) को विवरण:</li>
            </b>
            <table class="table border">
                <tbody>
                    <tr>
                        <td>नाम, थर : {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_name}}</td>
                        <td>उमेर : {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_age}}
                        </td>
                    </tr>
                    <tr>
                        <td>पिताको नाम, थर :{{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_fathername}}</td>

                        <td>फोन/मोबाईल नं: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_fathers_no}}</td>
                    </tr>
                    <tr>
                        <td>पति/पत्नीको नाम थर: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_spouse}}</td>
                        <td>फोन/मोबाईल नं: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_spouse_no}}</td>
                    </tr>
                    <tr>
                        <td>स्थायी ठेगाना: 
                            <br>
                            प्रदेश: {{$getLocalName ( $loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_state)}}
                            जिल्ला: {{$getDistrictName ( $loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_district)}}
                        </td>
                        <td>हाल बसोबासको ठेगाना:
                            <br>
                            प्रदेश:{{ $getLocalName ($loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_state)}}
                            जिल्ला:{{$getDistrictName ( $loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_district)}}
                        </td>
                    </tr>
                    <tr>
                        <td>न.पा./गा.पा: {{ $getLocalName ($loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_local)}} 
                            वडा नं.: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_permanent_ward}}</td>
                        <td>न.पा./गा.पा:{{$getLocalName ( $loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_local)}}
                             वडा नं.: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_temp_ward}}
                            </td>
                    </tr>
                    <tr>
                        <td>पेशा/व्यवसाय: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_occupation}} </td>
                        <td>शैक्षिक योग्यता: {{ $loanTakingVictim->basicOpponentDetailRegistration->opponent_education_level}}</td>
                    </tr>
                </tbody>
            </table>
            <b>
                <li>ऋण/कर्जा कारोबारको विवरण:</li>
            </b>
            <ul>
                <li><b>(क)</b> ऋण लिनुपर्ने कारण/प्रयोजन(<i class="fa-solid fa-check"></i>)
                    <ul>
                        {{( $loanTakingVictim->loanDetail->loan_purpose)}}
                    </ul>
                </li>
                <li><b>(ख)</b> कर्जा/ऋण कारोबार भएको मिति: {{ $loanTakingVictim->loanDetail->loan_date}}</li>
                <li><b>(ग)</b> कर्जा/ऋण कारोबार भएको स्थान: {{ $loanTakingVictim->loanDetail->loan_location}}</li>
                <li><b>(घ)</b> कर्जा/ऋण कारोबार भएको रकम:{{ $loanTakingVictim->loanDetail->loan_amount}}</li>
                <li><b>(ङ)</b> कर्जा/ऋण कारोबार हुँदाका बखतका साक्षीहरु</li>
                <ul>
                    {{ $loanTakingVictim->loanDetail->loan_witness}}
                    <li><b>(उ)</b> लिखत लेख्ने व्यक्तिको नाम, थर : {{ $loanTakingVictim->loanDetail->loan_docs_write}}</li>
                     <li> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;ठेगाना: {{ $loanTakingVictim->loanDetail->loan_docs_address}} </li>
                </ul>
            </ul>
            <b>
                <li>ऋण/कर्जा लिएको माध्यम (<i class="fa-solid fa-check"></i>) 
                </li>
            </b>
            
                    <ul>
                        {{($loanTakingVictim->loanDetail->loan_medium)}}
                    </ul>
                
            
            <b>
                <li>ऋण/कर्जा लिँदाका बखतका विवरण तथा शर्तहरु:</li>
            </b>
            <ul>
                    <li>
                        <li>
                            <li><b>(क)</b> कर्जा लिँदा तमसुक/लिखत/सम्झौता भएको  
                                <input type="radio" value="1" {{ $previouslyStoredValueForLoanDocs == '1' ? 'checked' : 'disabled' }}> भएको  
                                <input type="radio" value="0" {{ $previouslyStoredValueForLoanDocs == '0' ? 'checked' : 'disabled' }}> नभएको 
                            </li>
                            
                        </li>
                        
                    </li>
                     </li>
                <ul>
                    <li><b>(अ)</b> लेनदेन भएको रकम र तमसुकमा उल्लेख भएको रकम समान 
                        <input type="radio" value="1" {{ $previouslyStoredValueForLoanSame == '1' ? 'checked': 'disabled'  }}> भएको 
                        <input type="radio" value="0" {{ $previouslyStoredValueForLoanSame == '0' ? 'checked': 'disabled'  }}> नभएको
                    </li>

                    <li><b>(आ)</b> लिखत/तमसुकमा उल्लेख भएको रकम : {{ $loanTakingVictim->loanDetail->loan_tamasuk_amount}}</li>
                    <li><b>(इ)</b> ऋण/कर्जा कारोबार भएको वास्तविक रकम: {{ $loanTakingVictim->loanDetail->loan_transaction_actual_amount}}</li>
                    <li><b>(ई)</b> ऋण लिँदा सही छाप मात्र गरी धनिलाई खाली चेक दिएको <input type="radio" value="1" {{ $previouslyStoredValueForLoanStamp == '1' ? 'checked' : 'disabled' }}>  
                            नदिएको  <input type="radio" value="1" {{ $previouslyStoredValueForLoanStamp == '0' ? 'checked' : 'disabled' }}></li> 
                    <li><b>(उ)</b> धनी/साहुलाई रकम उल्लेख भएको चेक दिएको भए, चेकमा के कति रकम भरेको हो? {{ $loanTakingVictim->loanDetail->taken_loan_stamp_amount}}
                    </li>
                    <li><b>(ऊ)</b> लिखत/तमसुक परिवर्तन गरेको <input type="radio" value="1"  {{ $previouslyStoredValue == '1' ? 'checked': 'disabled' }} > 
                                नगरेको <input type="radio" value="0"  {{ $previouslyStoredValue == '0' ? 'checked': 'disabled' }} > </li>
                </ul>
                <li><b>(ख)</b> जग्गा राजिनामा पारीत गरी दिई ऋण/कर्जा लिएको सम्बन्धमा:</li>
                <ul>
                    <li><b>(अ)</b> जग्गा फिर्ता गर्ने शर्त राखिएको थियो <input type="radio" value="1" {{ $previouslyStoredValueForLandReturn == '1' ?'checked': 'disabled' }}>
                         राखिएको थिएन <input type="radio" value="0" {{ $previouslyStoredValueForLandReturn == '0' ?'checked': 'disabled' }}>
                    </li>
                    <li><b>(आ)</b> कुनै अर्को शर्त राखेर अर्को लिखत/तमसुक खडा गरिएको थियो <input type="radio" value="1"  {{ $previouslyStoredValueForOtherReturnPromise == '1' ?'checked': 'disabled' }} > 
                        थिएन <input type="radio" value="0"  {{ $previouslyStoredValueForOtherReturnPromise == '0' ?'checked': 'disabled' }} > 
                    </li>
                </ul>
                <li><b>(ग)</b> हाल सो जग्गाको भोग कसले गरिरहेको छ?
                    <br>{{ $loanTakingVictim->loanDetail->land_rights_possessed_by_whome }}
                    <br>
                    @if ($loanTakingVictim->loanDetail->land_rights_possessed_by_whome == 'अन्य व्यक्ति')
                        अन्य व्यक्ति भए निजको नाम, थर: {{ $loanTakingVictim->loanDetail->land_used_by_name }}
                        <br>
                        ठेगाना: {{ $loanTakingVictim->loanDetail->land_used_by_address }}
                    @endif
                </li>
                <li><b>(घ)</b> जग्गा दृष्टिबन्धक गरी पारित गरिदिई ऋण/कर्जा लिएकोमा: </li>
                <ul>
                    <li><b>(अ)</b> जग्गा दृष्टिबन्धक लिखत गर्दा अन्य केही शर्त राखिएको थियो <input type="radio" value="1" {{ $previouslyStoredValueForLandStopPromise == '1' ?'checked': 'disabled' }}>
                         थिएन <input type="radio" value="0" {{ $previouslyStoredValueForLandStopPromise == '0' ?'checked': 'disabled' }}></li> 

                    <li><b>(आ)</b> शर्त राखिएको भए के शर्त राखिएको थियो? {{ optional($loanTakingVictim->loanDetail)->land_stop_promise_state }}</li>
                    <li><b>(इ)</b> उक्त दृष्टिबन्धक राखिएको जग्गाको भोग चलन कसले गरिरहेको छ?
                       {{ $loanTakingVictim->loanDetail->land_stop_promise_who_name }}
                       @if ($loanTakingVictim->loanDetail->land_stop_promise_who_name == 'अन्य व्यक्ति')
                  
                        <br>
                        अन्य व्यक्ति भए निजको नाम, थर: {{ $loanTakingVictim->loanDetail->land_stop_promise_used_by_name}}
                        ठेगाना: {{ $loanTakingVictim->loanDetail->land_stop_promise_used_by_address}}
                        @endif
                    </li>
                </ul>
                <li><b>(ङ)</b> तमसुक/शर्तनामामा जमानी राखेको भए:</li>
                <ul>
                    <li><b>(क)</b> जमानी बस्नेको कुनै शर्त थियो <input type="radio" value="1" {{ $previouslyStoredValueForWitnessAnyPromise == '1' ?'checked': 'disabled' }}> 
                        थिएन <input type="radio" value="0" {{ $previouslyStoredValueForWitnessAnyPromise == '0' ?'checked': 'disabled' }}></li>
                        @if ($previouslyStoredValueForWitnessAnyPromise == '1')
                    <li><b>(ख)</b> शर्त थियो भने के थियो?: {{ optional($loanTakingVictim->loanDetail)->witness_any_promise_state }}</li>
                       @endif
                </ul>
            </ul>
            <b>
                <li>लिखत/तमसुकमा उल्लेख भएको मुलधन र ब्याज सम्बन्धमा:</li>
            </b>
            <ul>
                <li><b>(क)</b> लिखत/तमसुकमा उल्लेख भएको ब्याजदर प्रतिशत: {{ $loanTakingVictim->interestDetail->written_docs_interest_rate}}</li>
                <li><b>(ख)</b> बुझाउने/बुझाएको ब्याजदर प्रतिशत: {{ $loanTakingVictim->interestDetail->written_docs_given_interest_rate}}</li>
                <li><b>(ग)</b> हाल सम्म बुझाएको ब्याज रकम: {{ $loanTakingVictim->interestDetail->till_now_interest_amount}} </li>
                <li><b>(घ)</b> ब्याज बुझाएको माध्यम</li>
                <ul>

                    {{($loanTakingVictim->interestDetail->interest_paid_medium)}}
                    <br>
              
                </ul>
                <li><b>(ङ)</b> हालसम्म बुझाएको मूल धन वापतको रकम: {{ $loanTakingVictim->interestDetail->till_now_paid_capital}}</li>
                <li><b>(च)</b> बुझाउन बाँकी रकम: {{ $loanTakingVictim->interestDetail->till_now_to_be_paid_amount}}</li>
                <li><b>(छ)</b> लिखत वडा कार्यालयमा दर्ता भएको  <input type="radio" value="1" {{ $previouslyStoredValue == '1' ?'checked': 'disabled' }}> 
                         नभएको  <input type="radio" value="0" {{ $previouslyStoredValue == '0' ?'checked': 'disabled' }}> 
                </li>
            </ul>
            <b>
                <li>ऋण/कर्जा/तमसुक/लिखत अनुसार साँवा ब्याज बुझाउने अन्तिम म्याद (भाखा)</li></b> {{ $loanTakingVictim->interestDetail->loan_amount_pay_last_date}}
                
            
            <b>
                <li>ऋण/कर्जा कारोवारको सम्बन्धमा अदालतमा मुद्दा परेको <input type="radio"  value="1" {{ $previouslyStoredCourtValue == '1'? 'checked': 'disabled' }}  > 
                    नपरेको <input type="radio"  value="0" {{ $previouslyStoredCourtValue == '0'? 'checked': 'disabled' }}  >
                </li>
            </b>
            <ul>
                @if ($previouslyStoredCourtValue == '1')
                <li><b>(क)</b> अदालतमा मुद्दा दायर भएको भए:</li>
                <ul>
            {{ $loanTakingVictim->courtDetail->issue_in_court_result}}
            
                </ul>
                <li><b>(ख)</b> मुद्दाको विषय: {{ $loanTakingVictim->courtDetail->issue_in_court_subject}}
                     मुद्दा नं: {{ $loanTakingVictim->courtDetail->issue_in_court_subject_no}}.</li>
            </ul>
           
            <b>
                <li>अदालतको फैसलाको अवस्था:</li>
            </b>
            <ul>
                <li>(क)फैसला बमोजिम भरीभराउ भई पीडितको अचल सम्पत्ति डाँक लिलाम भएको <input type="radio" value="1" {{ $previouslyStoredCourtValue == '1' ? 'checked': 'disabled' }}  >
                     नभएको <input type="radio" value="0" {{ $previouslyStoredCourtValue == '0' ? 'checked': 'disabled' }}  >
                </li>
                <li><b>(ख)</b> डाँक लिलाममा उक्त अचल सम्पत्ति कसले सकार गरेको हो?
                    नाम, थर: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_name}}
                    ठेगाना: {{ $loanTakingVictim->courtDetail->applicant_collapse_by_who_address}}
                </li>
                <li><b>(ग)</b> फैसला बमोजिम रकम असुल उपर गर्न सम्पत्ति नभएकोले थुनामा राखी पाऊ भन्ने निवेदन परेको <input type="radio" value="1" {{ $previouslyStoredCourtValue == '1'? 'checked': 'disabled' }}  > 
                        नपरेको <input type="radio" value="0" {{ $previouslyStoredCourtValue == '0'? 'checked': 'disabled' }}  > 
                </li>
                <li><b>(घ)</b> थुनामा राख्ने आदेश भएको  <input type="radio" value="1" {{ $previouslyStoredCourtValue == '1'? 'checked': 'disabled' }}  > 
                     नभएको  <input type="radio" value="0" {{ $previouslyStoredCourtValue == '0'? 'checked': 'disabled' }}  > </li>
                     @if ($previouslyStoredCourtValue == '1')
                <li><b>(ङ)</b> थुनामा गैसकेको भए थुनामा गएको मिति {{ $loanTakingVictim->courtDetail->if_in_jail_start_date}} र थुनामा बस्नुपर्ने
                    अवधि {{ $loanTakingVictim->courtDetail->if_in_jail_start_duration}}</li>
                    @endif
                    @endif
            </ul>
            <b>
                <li>
                    ऋणी उपर चेक बाउन्स सम्बन्धी मुद्दा </li>  </b> भएको 
                    <input type="radio" value="1" {{ $previouslyStoredCourtValue == '1' ? 'checked' : 'disabled' }}> 
                    नभएको  
                    <input type="radio" value="0" {{ $previouslyStoredCourtValue == '0' ? 'checked' : 'disabled' }}>
                    <br>
                    @if ($previouslyStoredCourtValue == '1')
                        भए त्यो मुद्दाको अवस्था: {{ $loanTakingVictim->courtDetail->cheque_bounce_case_result }}
                        
                        <br>
                        @if ($loanTakingVictim->courtDetail->cheque_bounce_case_result == 'फैसलाले विगो भराएर जरिवाना र कैद समेत हुने ठहराएको छ')
                            <div>
                                सो फैसला भएको भए बिगो: 
                               {{ $loanTakingVictim->courtDetail->case_result_bigo }}
                            </div>
                            <div>
                               जरिवाना: 
                                {{ $loanTakingVictim->courtDetail->case_result_fine }}
                            </div>
                            <div>
                                कैद: 
                                {{ $loanTakingVictim->courtDetail->case_result_jail }}
                            </div>
                        @endif
                        फैसला भएको भए कार्यान्वयनको अवस्था:{{ $loanTakingVictim->courtDetail->if_bank_cheque_case_resulted}}
                    @endif
                    
                 
                
            <br>
            <b>
                <li>निवेदकको (ऋण/कर्जा लिने व्यक्ति) आर्थिक अवस्था:</li>
            </b>
            <ul>
                <li><b>(क) घरको विवरण:</b>
                    <ul>
                        <li><b>(अ)</b> घरको संख्या: {{ $loanTakingVictim->additionalDetail->applicant_house_no}}</li>
                        <li><b>(आ)</b> घरले चर्चेको जग्गाको क्षेत्रफल: {{ $loanTakingVictim->additionalDetail->applicant_house_area}}</li>
                        <li><b>(इ)</b> घरको किसिम (कच्ची/पक्की): {{ $loanTakingVictim->additionalDetail->applicant_house_type}}</li>
                        <li><b>(ई)</b> घरको तला: {{ $loanTakingVictim->additionalDetail->applicant_house_storeyed}}</li>
                        <li><b>(उ)</b> घर रहेको स्थान:  
                            <li>
                                प्रदेश:  {{$getStateName ( $loanTakingVictim->additionalDetail->applicant_house_state)}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                जिल्ला:  {{$getDistrictName ( $loanTakingVictim->additionalDetail->applicant_house_district)}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                न.पा./गा.पा: {{$getLocalName ( $loanTakingVictim->additionalDetail->applicant_house_local)}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                वडा नं: {{ $loanTakingVictim->additionalDetail->applicant_house_ward}}
                            </li>
 
                    </ul>
                </li>
                <li><b>(ख) जग्गाको विवरण:.</b><br>
                    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>किता नंवर: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>क्षेत्रफल: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>जिल्ला: 
                    </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b>न.पा./गा.पा.: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b>वडा नं.: </b>
                    <ul>
                        <li><b>(अ)</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $loanTakingVictim->additionalDetail->applicant_land_kitta_no}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $loanTakingVictim->additionalDetail->applicant_land_area}}&nbsp;
                            &nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$getDistrictName ( $loanTakingVictim->additionalDetail->applicant_land_state)}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;{{$getLocalName ( $loanTakingVictim->additionalDetail->applicant_land_district)}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $loanTakingVictim->additionalDetail->applicant_land_local }}</li>
                    </ul>
                </li>
            
                <b>
                    <li><b>(ग)</b> सवारी साधनको विवरण:  </b> {{ optional($loanTakingVictim->additionalDetail)->applicant_vehicle_details }}</li>
               
                <br>
                <br>
                <br>
                <b>
                    <li>(घ) चल सम्पत्तिको विवरण: </b>{{ optional($loanTakingVictim->additionalDetail)->applicant_current_asset_details }}</li>
                
            </ul>
            <br>
            <br>
            <b>


             
                    <li>
                         यो कर्जा कारोवारको सम्बन्धमा पीडितले मुलुकी अपराध संहिता, २०७४ को दफा २४९ क(अनुचित लेनदेन गर्न नहुने) अनुसार सम्बन्धित प्रहरी कार्यालयमा उजुरी/जाहेरी दिएको
            </li></b>भएको
                        <input type="radio" value="1" {{ $loanTakingVictim->additionalDetail->is_crime_reported == '1' ? 'checked' : 'disabled' }}>
                        नभएको
                        <input type="radio" value="0" {{ $loanTakingVictim->additionalDetail->is_crime_reported == '0' ? 'checked' : 'disabled' }}>
                        <br>
                   
                
                    @if ($loanTakingVictim->additionalDetail->is_crime_reported == '1')
                    
                    <b>(क)</b> उजुरी/जाहेरी दिएको भए:<br>
                    
                        
                    <ul>
                        <li>
                          <b>(अ)</b> सो मुद्दा कुन अवस्थामा छ?
                          {{ $loanTakingVictim->additionalDetail->if_crime_reported }}
                        </li>
                      </ul>
                       
                    @endif
                    <br>
                    <br>
                    <b><li>यो लेनदेनको सावाँ र ब्याजको सम्बन्धमा अन्य केही कुरा खुलाउनुपर्ने भए?</li></b>
                     {{ $loanTakingVictim->additionalDetail->transaction_actual_interest}}
            
            <br>
            <br>
            <br>
            <b>
                <li>यो निवेदनको ब्यहोरा पुष्टि गर्ने निम्न कागजातको फोटोकपी यसैसाथ संलग्न गरेको छु।</li>
            </b>
            <ul>
               
                <li><b>(क)</b> &nbsp;&nbsp;&nbsp; {{ optional($loanTakingVictim->additionalDetail)->application_verifying_document }}</li>
                <br>
            </ul>
            <b>
                <li>माथि लेखिएको व्यहोरा मैले जाने बुझेसम्म ठिक साँचो हो। यसमा फरक परे कानून बमोजिम सहुँला बुझाउँला भनी
                    सहीछाप गरिदिए</li>
            </b>
        </ol>
        <div class="row">
            <div class="col-lg-6">
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
            <div class="col-lg-6">
                <p>सहीछाप गर्नेको नाम थर: {{ $loanTakingVictim->additionalDetail->stamp_person_name}}</p>
                <br>
                <p>हस्ताक्षर:...................................</p>
                <br>
                <p>मिति: {{ $loanTakingVictim->additionalDetail->stamp_date}}</p>
            </div>
        </div>
   
</div> 
    --}}
