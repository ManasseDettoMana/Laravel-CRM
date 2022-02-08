@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex ">
        <div class="col-6 d-flex flex-column justify-content-center card-body"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum non dolorem, blanditiis, dignissimos deserunt obcaecati, similique temporibus iste ipsa explicabo est expedita hic consequatur possimus reiciendis corrupti. Architecto, debitis a.</p>
            <a href="{{route('admin.agencies.index')}}" class="btn stretched-link">VAI</a>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center card-body">
            <h1>EMP</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, inventore quam, cumque incidunt placeat, eos a ipsum recusandae nulla mollitia tenetur laborum officia repudiandae et laboriosam assumenda velit! Magnam, eaque.</p>
            <a href="{{route('admin.employments.index')}}" class="btn stretched-link">VAI</a>
        </div>
    </div>
</div>
@endsection
