@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/student/create" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- name --}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- phone --}}
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- email --}}
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email ID') }}</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- address --}}
        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- class --}}
        <div class="form-group row">
            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

            <div class="col-md-6">
                <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}"  autocomplete="class" autofocus>

                @error('class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- rollno --}}
        <div class="form-group row">
            <label for="rollno" class="col-md-4 col-form-label text-md-right">{{ __('Roll No') }}</label>

            <div class="col-md-6">
                <input id="rollno" type="text" class="form-control @error('rollno') is-invalid @enderror" name="rollno" value="{{ old('rollno') }}"  autocomplete="rollno" autofocus>

                @error('rollno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-8 offset-4">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
