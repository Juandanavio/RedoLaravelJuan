@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Films</div>
                <div class="card-body">
                    @if(count($films)=== 0)
                        <p>there are no films</p>
                    @else
                    <table id="table-films" class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Desciption</th>
                            <th>Location</th>
                            <th>Start Date</th>

                        </thead>
                        <tbody>
                            @foreach ($films as $film)
                                <tr data-id="{{ $film->id}}">
                                <td>{{$film->title}}</td>
                                <td>{{$film->description}}</td>
                                <td>{{$film->location}}</td>
                                <td>{{$film->start_date}}</td>


                                <td>
                                    <a href="{{route('user.films.show',$film->id)}}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
