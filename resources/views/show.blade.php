@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h3 style="text-align:center;">Incidents</h3>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Incident date</th>
            <th>Comments</th>
        </tr>
    </thead>
    <tbody>
        @foreach($incidents as $key => $incident)
        <tr>
            <th>{{ $incidents->firstItem() + $key }}</th>
            <td>{{ $incident->title }}</td>
            <td>{{ $incident->category }}</td>
            <td>{{ $incident->incident_date }}</td>
            <td>{{ $incident->comments }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session()->get('message') }}
    </div>
    @endif
    @if(session()->has('err'))
    <div class="alert alert-danger">
        {{ session()->get('err') }}
    </div>
    @endif
</div>

@endsection