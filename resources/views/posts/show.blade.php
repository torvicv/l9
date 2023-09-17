@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('storage/css/posts-show.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('storage/js/mouse-cursor.js') }}"></script>
@endpush

@section('content')
    <a href="https://google.com" class="img-1" data-cursor="pointer-2">Post goes here
        <div class="ball">
            <div class="img-2"></div>
        </div>
    </a>
@endsection


