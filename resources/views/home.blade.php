@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="inline">
                            <div class="linkf functionList content ">
                                <a href="{{ url('/reportSystem/total_report') }}">收支明細表</a>
                            </div>
                            <br>
                            <div class="linkf functionList content ">
                                <a href="{{ url('/reportSystem/modify_report') }}">報帳</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
