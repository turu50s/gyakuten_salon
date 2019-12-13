@extends('layouts')

@section('content')
  <div class="container mt-4">
    <div class="card mb-4">
      <div class="card-header mb-2">
        {{ $post->title }}
      </div>
      <div class="card-body">
        <p class="card-text">
          {{ $post->body }}
        </p>
      </div>
      <div class="card-footer">
        <span class="mr-2">
          投稿日時 {{ $post->created_at }}
        </span>
      </div>
    </div>
    <div class="mt-4 text-right">
        <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary">
          編集
        </a>
      <form method="post" action="{{ route('posts.destroy', ['post' => $post]) }}" style="display: inline-block;">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button class="btn btn-danger">削除</button>
      </form>
      </div>
  </div>
@endsection