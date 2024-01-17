@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>
            {{ $technology->name }}
        </h1>
        @if ($technology->type)
            @foreach ($technology->projects as $project)
                <li>{{ $project->title }}</li>
            @endforeach
        @else
            <li>No Technology</li>
        @endif

        <a href="{{ route('admin.technologies.index') }}" class="btn btn-danger">Return</a>
    </section>
@endsection
