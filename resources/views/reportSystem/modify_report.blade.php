@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modify</div>
                <br>
                <div class="card-body">
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                        <form action="{{url("/reporting")}}" method="post">
                            @csrf
                            <h4>Date</h4>
                            <input name="report_date" type="date" class="form-control @error('report_date') is-invalid @enderror"   required autocomplete="report_date">
                            @error('report_date')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <h4>Type</h4>
                            <select name="report_type">
                                    <option value="Revenue">Revenue</option>
                                    <option value="Expenses">Expenses</option>
                            </select>
                            <h4>Amount</h4>
                            <input type="text" name="report_amount"  class="form-control @error('report_amount') is-invalid @enderror"   required autocomplete="report_amount">
                            @error('report_amount')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <h4>Name</h4>
                            {{ Auth::user()->name }}
                            <h4>Detail</h4>
                            <textarea rows="8" cols="100" placeholder="More details ......" name="report_detail" class="form-control @error('report_detail') is-invalid @enderror"   required autocomplete="report_detail"></textarea>
                            @error('report_detail')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <br>
                            <button type="submit" >Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
