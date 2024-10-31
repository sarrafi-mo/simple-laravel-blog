@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1>Welcome to My Blog</h1>
        <p class="lead">Latest articles, tutorials, and news.</p>
    </div>

    <!-- Blog Posts -->
    <div class="row">
        <!-- Example of a single blog post card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/blog/thumbnail/a.jpg') }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title"> title </h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/blog/thumbnail/b.jpg') }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title"> title </h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/blog/thumbnail/c.jpg') }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title"> title </h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/blog/thumbnail/d.jpg') }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title"> title </h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/blog/thumbnail/e.jpg') }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title"> title </h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
    
    </div>
</div>
@endsection
