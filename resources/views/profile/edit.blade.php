@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <h4 class="text-center">My Profile</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Information</div>
                <div class="card-body">
                    @if(isset($details))
                   {!!Form::open(['action'=>['UserProfileController@update', $details->id], 'method'=>'post'])!!}
                        <div class="form-group">
                            {!!Form::label('name','Name')!!}
                            {!!Form::text('name',$details->user-id)!!}
                        </div>
                   {!!Form::close()!!}
                   @endif
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
@endsection