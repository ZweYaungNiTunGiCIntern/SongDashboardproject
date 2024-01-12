@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Song Dashboard') }}</div>
            </div>

            <div class="">
                <form action="{{ route('song.store') }}" method="post">
                    @csrf
                    <div class="mb-3 mt-3">


                        <label  class="form-label">Song Name </label>
                            <input type="text" name="songname" class="form-control @error('songname') is invalid @enderror" value="{{ old('songname') }}"  >
                                @error('songname')
                                    <div class="text-danger">{{ $message }}</div>

                                @enderror

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Singer <small class="text-danger" ></small></label>
                            <input type="text" name="singer" class="form-control @error('singer')is-invalid @enderror " value="{{ old('singer') }}">
                            @error('singer')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Author <small class="text-danger"></small></label>
                        <input type="text" name="author" class="form-control @error('author')is-invalid @enderror " value="{{ old('author') }}">
                            @error('author')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Pulished Year<small class="text-danger" ></small></label>
                            <input type="number" name="published_year" class="form-control @error('published_year')is-invalid @enderror " value="{{ old('published_year') }}">
                            @error('published_year')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('song.index') }}" class="btn btn-outline-dark">Back</a>
                        <button class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
