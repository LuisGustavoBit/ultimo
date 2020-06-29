@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
            <img src="{{asset('images/laravel.png')}}" alt="">
            <div class="pul-right">
            <marquee behavior="" direction="">

            <h1>Laravel 6 AJAX CRUD WITHOUT PAGE RELOAD</h1>
        </marquee>
        <h5 style="color:red">IMPLENTATION OF LARAVEL 6  AJAX DRUD</h5>
            </div>
        </div>
        
    </div>
    
</div>

<div class="container">
 
    @include('modals.Insert-Modal')
    @include('modals.Edit-Modal')
    @include('modals.View-Modal')
    @include('modals.Delete-Modal')
    @include('modals.table')
    @include('ajax')
</div>

@endsection