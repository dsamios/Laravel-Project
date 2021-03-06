@extends('layouts.app')

@section('body-class', 'home')

@section('content')

<section id="main-wrapper">
    <div class="container">  
    	<h2 class="section">
        	<a class="see-more-link" href="{{ route('posts.create') }}">
            	<div class="see-more">
                	<span class="see-more-text">Νέο Άρθρο</span>
                    <i class="fa fa-plus" aria-hidden="true"></i>
            	</div>
            </a>
            <div class="feed-icons">
            	<a class="feed-icon">
                	<i class="fa fa-rss" aria-hidden="true"></i>
                </a>
            </div>
        	<i class="fa fa-file-text-o" aria-hidden="true"></i>Όλα Άρθρα
        </h2>
        <div class="row">          
            @foreach($posts as $post)
            <div class="row fanarts">
                <div class="grid-item col-sm-5 col-md-4">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <div class="fanart">
                            <img class="base" src="http://test.subztv.gr/themes/subztv/assets/bootstrap/img/noimage2.png" alt="Fanart">
                            <img class="real lazy" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-original="{{ $post->image }}">
                            <div class="shadow-base"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8 col-sm-7 under-info">
                    <div class="titles">
                        <h3>
                            <a href="{{ route('posts.show', $post->id) }}">
                                <span class="main-title-sxe">{{ $post->title }}</span>
                            </a>
                            <div class="episode-stats hidden-sm">
                                <a href="{{ route('posts.show', $post->id) }}"><i class="fa fa-eye" aria-hidden="true"></i>Εμφάνιση</a>
                                <a href="{{ route('posts.edit', $post->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Επεξεργασία</a>
                            </div>
                        </h3>
                        <ul class="additional-stats">
                            <li><span><i class="fa fa-calendar fa-fw"></i> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span></li>
                        </ul>
                    </div>
                    <p class="overview">{{ substr($post->body, 0, 600) }}{{ strlen($post->body) > 600 ? "..." : "" }}</p>
                </div>
            </div>
            @endforeach  
        </div>   
    </div>
</section>

@endsection