@extends('layouts')

@section('content')
  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">投稿の新規作成</h1>
      <form method="post" action="{{ route('posts.store') }}">
        {{ csrf_field() }}
        <fieldset class="mb-4">
          <div class="form-group">
            <lavel for="title">
              タイトル
            </lavel>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
             class="form-control">
          </div>
          <div class="text-danger">{{ $errors->first('title') }}</div>
          <div class="form-group">
            <lavel for="body">
              本文
            </lavel>
            <textarea name="body" id="body" rows="4" class="form-control">{{ old('body') }}</textarea>
            <div class="text-danger">{{ $errors->first('body') }}</div>
          </div>
          <div class="mt-5">
            <a href="{{ route('top') }}" class="btn btn-secondary">キャンセル</a>
            <button type="submit" class="btn btn-primary">投稿する</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection