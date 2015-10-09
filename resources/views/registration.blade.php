@extends('template')


@section('header')
    @include('util.header')
@stop


@section('content')
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h4>Registration</h4>
        <hr/>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputLastName">Lastname <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="string" class="form-control size-14" id="inputLastName" name="lastName" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputFirstName">Firstname <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="string" class="form-control size-14" id="inputFirstName" name="firstName" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputMiddleInitial">Middle Initial <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="string" class="form-control size-14" id="inputMiddleInitial" name="mi" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputEmail">Email <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="email" class="form-control size-14" id="inputEmail" name="email" autocomplete="off">
                    <label class="size-11"><i>(This will be your user login)</i></label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="inputPassword">Password <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="password" class="form-control size-14" id="inputPassword" name="password" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label size-12" for="confirm_password">Verify Password <span class="glyphicon glyphicon-asterisk"></span>:</label>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="password" class="form-control size-14" id="confirm_password" name="password_confirmation" autocomplete="off">
                </div>
            </div>
            <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-ok"></span> Register</button>
        </form>
    </div>
</div>
@stop