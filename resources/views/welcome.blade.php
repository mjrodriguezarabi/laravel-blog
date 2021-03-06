@extends('layout')

@section('content')


    <section class="posts container">
        @foreach ($posts as $post)
            {{-- expr --}}
            <article class="post no-image">
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                            <span class="c-gray-1">{{$post->published_at->format('M d')}}</span>
                        </div>
                        <div class="post-category">
                            <span class="category text-capitalize">{{$post->category->name}}</span>
                        </div>
                    </header>
                    <h1><a class="text-uppercase c-green" href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h1>
                    <div class="divider"></div>
                    <p>{{$post->excerpt}}</p>
                    <footer class="container-flex space-between">
                        <div class="read-more">
                            <a href="#" class="text-uppercase c-green">read more</a>
                        </div>
                        <div class="tags container-flex">
                            @foreach ($post->tags as $tag)
                                {{-- expr --}}
                                <span class="tag c-gray-1 text-capitalize">#{{$tag->name}}</span>
                            @endforeach
                            
                        </div>
                    </footer>
                </div>
            </article>
        @endforeach

        

    </section><!-- fin del div.posts.container -->


@endsection

@section('pagination')

        {{$posts->links('vendor.pagination.default')}}
    
 @endsection
   