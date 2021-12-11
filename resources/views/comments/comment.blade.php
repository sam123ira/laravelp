@extends('Layouts.main')

@section('content')

    <section class="py-lg-5" style="margin-left: 2%;margin-right: 4%;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card box-shadow-xl overflow-hidden mb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="p-3" id="contact-form" method="post" action="{{url('/comments/comment')}}">
                                    @csrf()
                                    <div class="card-header px-4 py-sm-5 py-3">
                                        <h2>comment</h2>
                                        <p class="lead">You can comment on this post here.</p>
                                    </div>
                                    <div class="card-body pt-1">
                                        <div class="row">
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="title">
                                                </div>
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>message</label>
                                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 text-end ms-auto">
                                                <button type="submit" class="btn bg-gradient-info mb-0">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-6 col-12" style="margin-top: 4%;">
        <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                        <div class="p-3 pe-md-0">
                            <img class="w-100 border-radius-md shadow-lg" src="{{asset('/assets/img/'. $post->img)}}" alt="image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        <h5 class="mb-0">{{$post->title}}</h5>
                        <h6 class="text-info">William Pearce</h6>
                        <p class="mb-0">{{$post->text}}</p>
                    </div>
                </div>
                <a href="{{url('/comments/comment')}}" style="margin-left: 75%;margin-bottom: 4%;"><button type="button" class="btn bg-gradient-info mb-0">User comments</button></a>
            </div>
        </div>
    </div>

@endsection


