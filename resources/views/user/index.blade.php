@extends('template')


@section('header')
    @include('util.header')
@stop


@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <a href=""><span class="glyphicon glyphicon-user"></span> Profile</a>
                <br/>
                <a href=""><span class="glyphicon glyphicon-heart"></span> Workouts</a>
                <br/>
                <a href=""><span class="glyphicon glyphicon-book"></span> Logbook</a>
                <br/>
                <a href=""><span class="glyphicon glyphicon-star"></span> Memberships</a>
                <br/>
                <a href=""><span class="glyphicon glyphicon-flag"></span> Income Report</a>
                <br/>
            </div>
        </div>
    </div>
</div>
@stop