@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div>
               <div class="card mt-5 shadow">
                <div class="card-body">
                <div class="mb-3">
                    <a href="{{route('song.create')}}" class="btn btn-outline-success">
                        Add song
                    </a>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Song name</th>
                        <th scope="col">Singer</th>
                        <th scope="col">Author</th>
                        <th scope="col">Published Year</th>
                    </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <th scope="row"> {{ $song->id }}</th>
                                <td>{{ $song->songname }}</td>
                                <td>{{ $song->singer}}</td>
                                <td>{{ $song->author}}</td>
                                <td>{{ $song->published_year}}</td>
                            </tr>
                    </tbody>
                </table>
                <div>
                    <a href="{{ route('song.index') }}" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
