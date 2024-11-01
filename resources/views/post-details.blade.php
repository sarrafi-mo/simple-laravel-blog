@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Post Title -->
        <h1 class="display-4">Post Title</h1>

        <!-- Author and Date -->
        <p class="text-muted">
            <span>Author: <strong>Author Name</strong></span> |
            <span>Date: <strong>November 1, 2024</strong></span>

            <!-- Categories -->
            <span class="badge bg-primary ms-lg-1">Category</span>
        </p>

        <!-- Post Image -->
        <div class="my-4">
            <img src="https://via.placeholder.com/800x400" class="img-fluid rounded" alt="Post Image">
        </div>

        <!-- Post Content -->
        <div class="content my-4">
            <p>
                This is the content of the post. Here you can add detailed information and explanations about the topic.
            </p>
            <p>
                Additional paragraphs continue the narrative, offering insights, quotes, images, and any other media as
                needed.
            </p>
        </div>

        <!-- Like Section with Heart Icon -->
        <div class="my-3">
            <a href="#" class="text-danger me-3" title="Share on Facebook"><i class="bi bi-heart" style="font-size: 1.5rem;"></i>
                <span id="like-count">0</span></a>
        </div>

        <!-- Share Icons -->
        <div class="my-4">
            <a href="#" class="text-primary me-3" title="Share on Facebook"><i class="bi bi-facebook"
                    style="font-size: 1.5rem;"></i></a>
            <a href="#" class="text-success me-3" title="Share on WhatsApp"><i class="bi bi-whatsapp"
                    style="font-size: 1.5rem;"></i></a>
            <a href="#" class="text-info me-3" title="Share on Twitter"><i class="bi bi-twitter"
                    style="font-size: 1.5rem;"></i></a>
            <a href="#" class="text-danger" title="Share on Instagram"><i class="bi bi-instagram"
                    style="font-size: 1.5rem;"></i></a>
        </div>

        <!-- Comments Section -->
        <div class="comments-section my-5">
            <h3>User Comments</h3>
            <div class="comment my-3">
                <h5>User Name</h5>
                <a href="#" class="text-danger float-end"><i class="bi bi-trash" style="font-size: 1.5rem;"></i></a>
                <p>This is a user's comment on the post.</p>
                <small class="text-muted">2 days ago</small>
            </div>
            <div class="comment my-3">
                <h5>Another User</h5>
                <a href="#" class="text-danger float-end"><i class="bi bi-trash" style="font-size: 1.5rem;"></i></a>
                <p>Another comment from a different user.</p>
                <small class="text-muted">1 week ago</small>
            </div>
        </div>

        <!-- Comment Form -->
        <div class="comment-form my-5">
            <h3>Leave a Comment</h3>
            <form action="#">
                <div class="mb-3">
                    <label for="comment" class="form-label">Your Comment</label>
                    <textarea class="form-control" id="comment" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>
        </div>
    </div>
@endsection
