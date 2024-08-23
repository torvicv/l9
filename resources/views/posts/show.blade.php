@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('storage/css/posts-show.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('storage/js/mouse-cursor.js') }}"></script>
@endpush

@section('content')
<div>
    <div class="content">
        <h1>Post</h1>
        <div>
            <a href="https://google.com" class="img-1" data-cursor="pointer-2">
                Post goes here
            </a>
        </div>
        <a href="https://google.com" class="img-1 fixed-position" data-cursor="pointer-2">
            Go out
        </a>
        <a href="https://google.com" class="img-1 fixed-position2" data-cursor="pointer-2">
            Go in
        </a>
    </div>
</div>
<div class="ball">
    <div class="img-2"></div>
</div>
@endsection


