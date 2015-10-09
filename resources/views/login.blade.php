@extends('template')


@section('header')
    @include('util.header')
@stop


@section('content')
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h4>Login</h4>
        <hr/>
        <form class="form-horizontal" action="{{ route('vl') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputEmail">Email:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="email" class="form-control size-14" id="inputEmail" name="email" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputPassword">Password:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="password" class="form-control size-14" id="inputPassword" name="password" autocomplete="off">
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Login</button>
        </form>
    </div>
</div>
@stop