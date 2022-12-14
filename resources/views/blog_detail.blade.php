@extends('layouts.app')
@section('specific_css')
@endsection
@section('content')
    @if(isset($blog))
        <!-- Blog Area-->
    <div class="apland-blog-area section_padding_130_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-9 col-lg-8">
                    <!-- Blog Post Area-->
                    <div class="single-blog-post"><span class="post-date">{{Helper::timeAgo($blog->changed)}}</span>
                        <h1 class="mb-3">{{$blog->name}}</h1>
                        <div class="post-meta mb-5">{{$blog->desc}}</div>

                        <img class="post-thumbnail" src="{{$blog->image}}" alt="">
                        {!! htmlspecialchars_decode( $blog->content , ENT_QUOTES) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
@section("specific_js")
@endsection
