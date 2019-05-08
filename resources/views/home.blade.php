@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- PERSONAL DETAILS FORM -->
                    {!!Form::open(['action'=>'DetailsController@store', 'method'=>'post'])!!}
                        <div class="form-group">
                            {!!Form::label('address','Address')!!}
                            {!!Form::text('address','',['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('location','Location')!!}
                            {!!Form::text('location','',['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('phone','Phone Number')!!}
                            {!!Form::text('phone','',['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('hobby','Pick a Hobby')!!}
                        </div>
                        <div class="form-group">
                            {!!Form::checkbox('movies','',['value'=>'Watching Movies'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit('SUBMIT',['class'=>'btn btn-primary','fas fa-user'])!!}
                        </div>
                    {!!Form::close()!!}
                    <!-- END FORM -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
