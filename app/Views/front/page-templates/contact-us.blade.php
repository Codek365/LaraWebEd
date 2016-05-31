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
                {{ $object->description or '' }}
                <br><br>
                @include('front._modules._contact-us')
            </div>
        </div>
    </div>
@endsection
