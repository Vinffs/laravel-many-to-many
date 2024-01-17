@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>
            {{ $technology->title }}
        </h1>
        <div><img src="{{ asset("storage/$technology->thumb") }}" alt="{{ $technology->title }}"></div>
        <p>{{ $technology->description }}</p>
        <div>{{ $technology->type ? $technology->type->name : 'Uncategorized' }}</div>
        <a href="{{ route('admin.technologies.index') }}" class="btn btn-danger">Return</a>
    </section>
@endsection
