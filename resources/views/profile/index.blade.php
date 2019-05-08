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
                    @if(isset($user))
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            @foreach($user as $s)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
@endsection