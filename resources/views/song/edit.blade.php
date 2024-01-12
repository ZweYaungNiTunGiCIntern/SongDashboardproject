@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">

                    <div class="">
                        <form action="{{ route('song.update',$song->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Song</label>
                                <input type="text" name="songname" class="form-control" value="{{ $song->songname }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Singer</label>
                                <input type="text" name="singer" class="form-control" value="{{ $song->singer }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $song->author }}">
                            </div><div class="mb-3">
                                <label  class="form-label">Published Year</label>
                                <input type="number" name="published_year" class="form-control" value="{{ $song->published_year }}">
                            </div>


                            <div class="mb-4">
                                <a href="{{ route('song.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>

                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
