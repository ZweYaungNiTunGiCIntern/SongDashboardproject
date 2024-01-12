@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div >
            <div class="card mt-6 shadow">
                <div class="card-body">
                    <a href="{{route('song.create')}}" class="btn btn-outline-success">Add</a>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Song Name</th>
                                <th scope="col">Singer</th>
                                <th scope="col">Author</th>
                                <th scope="col">Published Year</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($songs as $song)
                                <tr>
                                    <th scope="row"> {{ $song->id }}</th>
                                    <td>{{ $song->songname }}</td>
                                    <td>{{ $song->singer}}</td>
                                    <td>{{ $song->author }}</td>
                                    <td>{{ $song->published_year }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('song.edit',$song->id) }}" class="btn btn-outline-warning"">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{route('song.show',$song->id) }}" class="btn btn-outline-primary">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <div>
                                                <form action="{{route('song.destroy',$song->id) }}" method="post" class="d-inline-block">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger">

                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
