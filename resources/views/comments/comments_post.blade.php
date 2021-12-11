@extends('Layouts.main')

@section('content')

    @foreach($comments as $comment)
        <div class="col-lg-4 m-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-normal">
                        <a href="javascript:;">User {{$comment->name}} said :</a>
                    </h5>
                    <p class="mb-0">
                        {{$comment->text}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach

@endsection
