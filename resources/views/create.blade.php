@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add Incident</h3>
                </div>
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

                <div class="panel-body">
                    <form class="form-horizontal" method="get" action="{{ route('create-incident') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="latitude" class="col-md-4 control-label">Latitude</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="latitude" placeholder="Latitude" required autofocus>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="longitude" class="col-md-4 control-label">Longitude</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="longitude" placeholder="Longitude" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="category_id" class="col-md-4 control-label">Category</label>
                                <div class="col-md-8">
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach($categories as $category)
                                        <option value={{ $category->id }}> {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="date" class="col-md-4 control-label">Incident Date</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" class="form-control" name="incident-date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="tile" class="col-md-4 control-label">Title</label>
                                <div class="col-md-8">
                                    <textarea name="title" class="form-control" placeholder="Title here" cols="30" rows="2" required></textarea>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="comments" class="col-md-4 control-label">Comments</label>
                                <div class="col-md-8">
                                    <textarea name="comments" class="form-control" cols="30" rows="2" placeholder="Comments here" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection