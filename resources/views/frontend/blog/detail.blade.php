@extends('layouts.app')

@section('title')
Detail Blog - {{ $blog['title'] }}
@endsection

@section('head')
<style>
    .blog-img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        object-position: center;
        margin-top: 50px;
    }

    .content-otr {
        margin-top: 50px;
        text-align: center;
        color: white;
    }
</style>
@endsection

@section('content')
<div id="app" v-cloak>
    <!-- Inner Header Section -->
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Blog</h2>
                <div class="linkk-otr">
                    <span class="inner-page-link linkk-page heading-S">{{ $blog['title'] }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Detail Section -->
    <div class="blog-detail-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="blog-detail-box">
                        <h1 class="heading heading-h1" style="text-align: center; color:bisque">{{ $blog['title'] }}</h1>
                        <img class="blog-img" src="{{ $blog['image'] }}" alt="blog">
                        <div class="content-otr">
                            <p class="date-otr heading-S">• by {{ $blog['users']['username'] }} <span class="date-inr"> • {{ $blog['date'] }}</span></p>
                            <div class="blog-content heading-S">
                                {{ $blog['content'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
