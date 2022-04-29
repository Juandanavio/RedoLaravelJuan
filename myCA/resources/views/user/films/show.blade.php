@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Film: {{$film->title}}</div>
                <div class="card-body">
                    <table id="table-films" class="table table-hover">
                    <tbody>
                  <tr>
                    <td>Title</td>
                    <td>{{ $film->title }}</td>
                  </tr>
                  <tr>
                    <td>Description</td>
                    <td>{{ $film->description }}</td>
                  </tr>
                  <tr>
                    <td>Location</td>
                    <td>{{ $film->location }}</td>
                  </tr>
                  <tr>
                    <td>Start Date</td>
                    <td>{{ $film->start_date }}</td>
                  </tr>
                </tbody>
                    </table>
                    <a href="{{route('user.films.index')}}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
