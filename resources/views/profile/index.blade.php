@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Personal Details</div>
                <div class="card-body">
                    @if(isset($details))
                        <table class="table table-striped">
                            <tr>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                            @foreach($details  as $info)
                            <tr>
                                <td>{{ $info->phone }}</td>
                                <td>{{ $info->address }}</td>
                                <td>{{ $info->location }}</td>
                                <td><a href="{ url('profile/{$details->id}/edit')}" class="btn btn-success">Edit</a></td>
                            </tr>
                            @endforeach
                        </table>

                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection