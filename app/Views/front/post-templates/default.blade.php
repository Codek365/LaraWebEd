@extends('front._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
    <div class="main-content">
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-justify">
                        {!! $object->content !!}
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection