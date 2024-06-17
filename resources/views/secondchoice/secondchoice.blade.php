@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">
                <a href="{{ url('pos2') }}" class="btn btn-dark mr-25"> back </a>

            </div>
            <h5 class="hk-sec-title">ምርጫ 2 </h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>
                                    <th>ሙሉ ስም</th>



                                    {{-- <th>የሚወዳደሩበት የስራ መደብ</th>

                                    <th>የትምህርት ደረጃና የትምህርት ዝግጅት</th> --}}


                                    @role('hr')
                                        <th>SubmittedBy HR</th>
                                        <th>የሰው ኃይል ግምገማ</th>
                                    @endrole
                                    @role('admin')
                                        <th>action</th>
                                    @endrole






                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($forms as $i => $form)
                                    {{-- @if ($form->h_r_id == null) --}}
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>

                                            <button type="button" class="btn bg-blue-dark-4 text-white" data-toggle="modal"
                                                data-target="#id_{{ $i }}">
                                                {{ $form->full_name }}</button>

                                        </td>

                                        {{-- <td>{{ $form->choice2->position }}</td> --}}

                                        {{-- <td>
                                            @foreach ($form->education as $edu)
                                                ({{ $edu->edu_level->education_level }},{{ $edu->education_type->education_type }})
                                            @endforeach
                                        </td> --}}


                                        @role('admin')
                                            <td>
                                                <form action="{{ route('secondhr.destroy', $form->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger pd-10">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                </form>
                                            </td>
                                        @endrole
                                        @role('hr')
                                            <td>{{ $form->submit }}</td>
                                            <td><a class="btn  btn-dark " type="submit" id="btn-evaluate"
                                                    href="{{ route('addsecond', $form->id) }}"> evaluate</a>
                                            </td>
                                        @endrole

                                        </td>
                                        <div class="modal fade" id="id_{{ $i }}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                                            የተወዳዳሪው ሙሉ መረጃ</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>




                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ሙሉ
                                                                    ስም</label>


                                                                <div class="col-sm-10">
                                                                    <input type="text" value="{{ $form->full_name }}"
                                                                        name="full_name"class="form-control" id="inputname"
                                                                        placeholder=" firstName" readonly>
                                                                </div>

                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputname"
                                                                    class="col-sm-2 col-form-label">ጾታ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" value="{{ $form->sex }}"
                                                                        name="sex"class="form-control " id="inputEmail3"
                                                                        readonly>
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">ኢሜይል</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" value="{{ $form->email }}"
                                                                        name="email"class="form-control" id="inputname"
                                                                        placeholder="email" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ስልክ
                                                                    ቁጥር</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" value="{{ $form->phone }}"
                                                                        name="phone"class="form-control" id="inputname"
                                                                        placeholder="phone" readonly>
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label for="inputname" class="col-sm-2 col-form-label">አሁን
                                                                    ያሉበት የስራ
                                                                    መደብ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                        value="{{ $form->positionofnow }}"
                                                                        name="positionofnow"class="form-control "
                                                                        id="inputEmail3" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputname"
                                                                    class="col-sm-2 col-form-label">ደረጃ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" value="{{ $form->level }}"
                                                                        name="level"class="form-control " id="inputEmail3"
                                                                        readonly>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="fee"
                                                                    class="col-sm-2 col-form-label">ደምወዝ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" value="{{ $form->fee }}"
                                                                        name="fee"class="form-control " id="fee"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <h4 class="text-white text-center mt-50 mb-4"
                                                                style=" background-color:#00599c"> የትምህርት
                                                                ደረጃና የትምህርት ዝግጅት በቅድመ ተከተል</h4>
                                                            <div class="form-group  mb-100">

                                                                <label for="inputname"></label>


                                                                @foreach ($form->education as $fo)
                                                                    {{-- <input type="text"
                                                                        value="[{{ $fo->edu_level->education_level }} , {{ $fo->education_type->education_type }}],"
                                                                        name="education_level"class="form-control "
                                                                        id="inputEmail3" readonly> --}}
                                                                @endforeach


                                                            </div>
                                                            <h4 class="text-white  text-center mt-3 mb-4 "
                                                                style=" background-color:#00599c"> የ
                                                                መወዳደርያ የስራ ክፍልና የስራ መደብ</h4>
                                                            <button
                                                                class="text-white text-left mt-3 mb-4 mr-150 text-left"style=" background-color:#00599c">
                                                                ምርጫ 1</button>
                                                            <div class="form-group row">
                                                                <label for="inputname" class="col-sm-2 col-form-label">የስራ
                                                                    ክፍሉ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                        value="{{ $form->job_category->job_category }}"
                                                                        name="job_category"class="form-control "
                                                                        id="inputEmail3" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="position" class="col-sm-2 col-form-label">የስራ
                                                                    መደብ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                        value="{{ $form->position->position }}"
                                                                        name="position"class="form-control "
                                                                        id="position" readonly>
                                                                </div>
                                                            </div>

                                                            <button class="text-white text-left mt-3 mb-4 mr-150 text-left"
                                                                style=" background-color:#00599c"> ምርጫ 2</button>
                                                            <div class="form-group row">
                                                                <label for="inputname" class="col-sm-2 col-form-label">የስራ
                                                                    ክፍሉ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                        value="{{ $form->jobcat2->job_category }}"
                                                                        name="job_category"class="form-control "
                                                                        id="job_category" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-25">
                                                                <label for="position" class="col-sm-2 col-form-label">የስራ
                                                                    መደብ</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"
                                                                        value="{{ $form->choice2->position }}"
                                                                        name="position"class="form-control "
                                                                        id="position" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group  mt-100">
                                                                <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን
                                                                    በኢትዮጵያ
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->UniversityHiringEra }}"
                                                                    name="UniversityHiringEra"class="form-control "
                                                                    id="UniversityHiringEra" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="UniversityHiringEra">በዩኒቨርስቲዉ አገልግሎት ዘመን
                                                                    (በዓመት,የስራ
                                                                    መደብ)
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->servicPeriodAtUniversity }}"
                                                                    name="servicPeriodAtUniversity"class="form-control "
                                                                    id="servicPeriodAtUniversity" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="UniversityHiringEra">በሌላ መስርያ ቤት አገልግሎት
                                                                    ዘመን(በዓመት,የስራ
                                                                    መደብ)
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->servicPeriodAtAnotherPlace }}"
                                                                    name="servicPeriodAtAnotherPlace"class="form-control "
                                                                    id="servicPeriodAtAnotherPlace" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="servicPeriodAtAnotherPlace">አገልግሎት ከዲፕሎማ
                                                                    በፊት(በዓመት,የስራ መደብ)
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->serviceBeforeDiplo }}"
                                                                    name="serviceBeforeDiplo"class="form-control "
                                                                    id="serviceBeforeDiplo" readonly>

                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="UniversityHiringEra"> አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                    በኋላ(በዓመት, የስራ መደብ)
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->serviceAfterDiplo }}"
                                                                    name="serviceAfterDiplo"class="form-control "
                                                                    id="serviceAfterDiplo" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="resultOfrecentPerform"> የሁለት ተከታታይ የቅርብ ጊዜ
                                                                    የሥራ
                                                                    አፈጻፀም አማካይ
                                                                    ውጤት(ከ100 በቁጥር)
                                                                </label>

                                                                <input type="text"
                                                                    value="{{ $form->resultOfrecentPerform }}"
                                                                    name="resultOfrecentPerform"class="form-control "
                                                                    id="resultOfrecentPerform" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት
                                                                </label>

                                                                <input type="text" value="{{ $form->DisciplineFlaw }}"
                                                                    name="DisciplineFlaw"class="form-control "
                                                                    id="DisciplineFlaw" readonly>

                                                            </div>
                                                            <div class="form-group  ">
                                                                <label for="MoreRoles">ተጨማሪ የሥራ ድርሻ
                                                                </label>

                                                                <input type="text" value="{{ $form->MoreRoles }}"
                                                                    name="MoreRoles"class="form-control " id="MoreRoles"
                                                                    readonly>

                                                            </div>




                                                            <h4 class="text-white text-center mt-50 mb-4"
                                                                style=" background-color:#00599c">የስራ
                                                                ልምድ</h4>

                                                            <div class="form-group ">
                                                                <label for="inputEmail3"></label>


                                                                @foreach ($form->experiences as $ex)
                                                                    <input type="text"
                                                                        value="[{{ $ex->startingDate }} እስከ {{ $ex->endingDate }} በ {{ $ex->positionyouworked }}], "
                                                                        name="" class="form-control"
                                                                        id="inputname" placeholder="" readonly>
                                                                @endforeach


                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach

                            </tbody>
                        </table>
                        {{-- {!! $forms->links() !!} --}}


                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
