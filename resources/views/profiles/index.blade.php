@extends('layouts.front_profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-2">
                                <p class="name mx-auto">{{ Str::limit($headline->name, 100) }}</p>
                            </div>
                            <div class="col-md-2">
                                <p class="gender mx-auto">{{ Str::limit($headline->gender, 10) }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="hobby mx-auto">{{ Str::limit($headline->hobby, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p class="introduction mx-auto">{{ Str::limit($headline->introduction, 300) }}</p>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-12">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ Str::limit($post->name, 100) }}
                                </div>
                                <div class="gender">
                                    {{ Str::limit($post->gender, 10) }}
                                </div>
                                <div class="hobby">
                                    {{ Str::limit($post->hobby, 100) }}
                                </div>
                                <div class="introduction">
                                    {{ Str::limit($post->introduction, 300) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection