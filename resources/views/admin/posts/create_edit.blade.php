@extends('admin.layout')

@section('title'. 'Create/Edit Post')

@section('content')

	@if (!$post->exists())
		{{-- expr --}}
		<div style="visibility: hidden; height: 1px;">
			$post->title = old('title');
			$post->excerpt = old('excerpt');
			$post->body = old('body');
			
		</div>
		{{Form::open(['route' => 'post.store', 'method' => 'POST'])}}

	@else

		{{Form::open(['route' => ['post.update', $post->id], 'method' => 'PUT'])}}
		
			<input type="hidden" name="post_id" value="{{$post->id}}">
	@endif

		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="form-group">
					{{Form::label('title', 'Titulo')}}
					{{Form::text('title', $title, ['placeholder' => 'Titulo del post', 'class' => 'form-control'])}}
				</div>
			</div>
		</div>
	{{Form::close()}}
@endsection