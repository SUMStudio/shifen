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
                            <div class="x_content" style="background: url({{ asset('/image/xidian.jfif') }}) no-repeat 100% 0">
                                <br>
                                <p style="font-weight: bold;font-size: medium">
                                    发起拼车<br>
                                </p>
                                <hr class="clearfix col-xs-12">
                                <form class="form-horizontal form-label-left" method="post" action="{{route('postTest')}}">


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">起始位置 <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea name="sada" class="form-control" rows="3" placeholder="（必填）"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">结束位置 <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea name="reason" class="form-control" rows="3" placeholder="（必填）"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">出发时间</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="start_time" type="datetime-local"
                                                   class="form-control has-feedback-left" id=""
                                                   value="{{ Carbon\Carbon::now()->format('Y-m-d\TH:i') }}">
                                        </div>
                                    </div>



                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            {{ csrf_field() }}
                                            <a class="btn btn-primary" onclick="window.history.back()">返回</a>
                                            <button type="reset" class="btn btn-primary">重置</button>
                                            <button type="submit" class="btn btn-success">提交</button>
                                        </div>
                                    </div>

                                </form>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
