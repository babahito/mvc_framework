@extends('layouts.app')
    
    <!-- CSSの設定 -->
    @section('css')<link href="">@endsection

    <!-- タイトル -->
    @section('title')練習ページ@endsection
    
    <!-- 中身 -->
    @section('content')
        @foreach($posts as $post)
        <div>{{$post->title}}</div>
        @endforeach
    @endsection

    <!-- JavaSript -->
    @section('javascript')
        <script></script>
    @endsection