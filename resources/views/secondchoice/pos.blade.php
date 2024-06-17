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


            </div>
            <h5 class="hk-sec-title">የአመልካቾች ዝርዝር</h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_3" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>




                                    <th>የሚወዳደሩበት የስራ መደብ</th>







                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($forms as $i => $form)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <form action="" method="POST"><a
                                                    href="{{ route('posDetail2', $form->id) }}" class="mr-25"
                                                    data-toggle="tooltip"
                                                    data-original-title="show">{{ $form->jobcat2->job_category }}\{{ $form->position }}
                                                </a>
                                            </form>
                                        </td>



                                    </tr>
                                @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
