@extends('layouts')

@section('content')
  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">投稿の編集</h1>
      <form method="post" action="{{ route('posts.update', ['post' => $post]) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <fieldset class="mb-4">
          <div class="form-group">
            <lavel for="title">
              タイトル
            </lavel>
          <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control">
          </div>
          <div class="form-group">
            <lavel for="body">
              本文
            </lavel>
            <textarea name="body" id="body" rows="4" class="form-control">{{ $post->body }}
            </textarea>
          </div>
          <div class="mt-5">
            <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-secondary">キャンセル</a>
            <button type="submit" class="btn btn-primary">更新する</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection