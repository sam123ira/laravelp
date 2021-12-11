@extends('layouts.main')

@section('content')

    @foreach($posts as $post)

        <div class="col-lg-4 ms-auto mt-lg-0 ">
            <div class="card m-5">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image" href="{{url('posts/' . $post->id)}}">
                        <img src="{{asset('assets/img/' . $post->img )}}" alt="img-colored-shadow" style="width: 400px;height: 200px;" class="img-fluid border-radius-lg">
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-normal">
                        <a href="{{url('posts/' . $post->id)}}">{{$post->title}}</a>
                    </h5>
                    <p class="mb-0">
                        <a href="{{url('posts/' . $post->id)}}">{{Str::limit($post->text, 100)}}</a>
                    </p><br>
                    <h6 class="font-weight-normal text-justify">Posted in
                        {{jdate($post->created_at)->ago()}}
                    </h6>
                    <button type="button" class="btn bg-gradient-success btn-sm mb-0 mt-3">Friend Request</button>
                    <button type="button" class="btn bg-gradient-primary btn-sm mb-0 mt-3">like ♥</button>

                </div>
            </div>
        </div>
    @endforeach
@endsection
