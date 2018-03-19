@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">拾纷拼车</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="#" class="btn btn-default btn-block">拼车列表</a>
                            <a href="{{ route("carpoolingCreate") }}" class="btn btn-success btn-block">发起拼车</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
