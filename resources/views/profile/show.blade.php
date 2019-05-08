@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <div class="card">
               
               <div class="card-header">{{ $detail->name }}</div>
               <div class="card-body">
                   <p>Address :</p> {{ $detail->address }}
                   <p>Location:</p>{{ $detail->location }}
                   <p>Phone:</p> {{ $detail->phone }}
               </div>
           </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection