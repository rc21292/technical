@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Posts</div>
                <div class="card-body">
                    @forelse($posts as $post)
                    <div class="card">
                        <img src="{{ asset('images/'.$post->img) }}" alt="Avatar" height="150px" width="150px">
                        <div class="container">
                            <h4><b>{{ $post->title }}</b></h4>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>

                    @empty
                    <p>Technical issue please try again!</p>
                    @endforelse
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

