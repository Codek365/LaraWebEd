@extends('front._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($latestPosts as $key => $row)
                    <div class="post-preview">
                        <a href="{{ _getPostLink($row->slug, $currentLanguageCode) }}" title="{{ $row->title or '' }}">
                            <h2 class="post-title">{{ $row->title or '' }}</h2>
                            <h3 class="post-subtitle">{{ $row->description or '' }}</h3>
                        </a>
                        <p class="post-meta text-right">{{ $row->created_at }}</p>
                    </div>
                @endforeach
                @include('front._modules._pagination', ['paginator' => $latestPosts])
            </div>
        </div>
    </div>
@endsection