@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <h1 class="mb-4">Create New Post</h1>
        <form action="#">
            <!-- Post Title -->
            <div class="mb-3">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" class="form-control" id="postTitle" placeholder="Enter post title" required>
            </div>

            <!-- Post Content -->
            <div class="mb-3">
                <label for="postContent" class="form-label">Post Content</label>
                <textarea class="form-control" id="postContent" rows="6" placeholder="Write your post content here" required></textarea>
            </div>

            <!-- Post Category -->
            <div class="mb-3">
                <label for="postCategory" class="form-label">Category</label>
                <select class="form-select" id="postCategory" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                </select>
            </div>

            <!-- Post Image Upload -->
            <div class="mb-3">
                <label for="postImage" class="form-label">Upload Image</label>
                <input class="form-control" type="file" id="postImage">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Publish Post</button>
        </form>
    </div>

@endsection
