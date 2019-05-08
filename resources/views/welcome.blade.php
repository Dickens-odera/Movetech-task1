@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="jumbotron text-center">
            <h4 class="text-center">Simple Registree System</h4>
            <p><small>This is a simple project to illustrate the Larave CRUD </small></p>
        @if(!Auth::user())
        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        @else
        <a href="{{ url('profile') }}" class="btn btn-primary">Proceed</a>
        @endif

    </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection