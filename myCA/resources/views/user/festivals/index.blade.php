@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Festivals</div>
                <div class="card-body">
                    @if(count($festivals)=== 0)
                        <p>there are no festivals</p>
                    @else
                    <table id="table-festivals" class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Desciption</th>
                            <th>Location</th>
                            <th>Start Date</th>
                            <th>End Date</th>

                        </thead>
                        <tbody>
                            @foreach ($festivals as $festival)
                                <tr data-id="{{ $festival->id}}">
                                <td>{{$festival->title}}</td>
                                <td>{{$festival->description}}</td>
                                <td>{{$festival->location}}</td>
                                <td>{{$festival->start_date}}</td>
                                <td>{{$festival->end_date}}</td>


                                <td>
                                    <a href="{{route('user.festivals.show',$festival->id)}}" class="btn btn-primary">View</a>
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
