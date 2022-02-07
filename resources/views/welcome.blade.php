@extends('layouts.app')

@section('content')
<div class="container">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{route('admin.home')}}">Home</a>
            @endauth
        </div>
    @endif

    <h1>welcome</h1>
</div>
@endsection
