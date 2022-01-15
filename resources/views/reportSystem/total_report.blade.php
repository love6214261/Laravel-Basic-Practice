@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report</div>
                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="REtable">
                            <tr >
                                <th>Date</th>
                                <th>Name</th>
                                <th>Items</th>
                                <th>Revenue</th>
                                <th>Expenses</th>
                                <th>Balance</th>
                            </tr>
                            @foreach($reportings as $key => $data)

                                    @if ($data->report_type=="Revenue")
                                            <tr>
                                                <td>{{$data->report_date}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->report_detail}}</td>
                                                <td>{{$data->report_amount}}</td>
                                                <td>X</td>
                                                <td></td>
                                            </tr>
                                    @else
                                            <tr>
                                                <td>{{$data->report_date}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->report_detail}}</td>
                                                <td>X</td>
                                                <td>{{$data->report_amount}}</td>
                                                <td></td>
                                            </tr>
                                    @endif

                            @endforeach
                        </table>
                        <hr>
                        <table class="REtable">
                            <tr >
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>$ {{$totalRevenue}}</th>
                                <th>$ {{$totalExpenses}}</th>
                                <th>$ {{$totalRevenue-$totalExpenses}}</th>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
