
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{ $currentLanguageCode or 'en' }}" class="ie8 no-js {{ ($showHeaderAdminBar) ? 'show-admin-bar' : '' }}"> <![endif]-->
<!--[if IE 9]>
<html lang="{{ $currentLanguageCode or 'en' }}" class="ie9 no-js {{ ($showHeaderAdminBar) ? 'show-admin-bar' : '' }}"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ $currentLanguageCode or 'en' }}" class="{{ ($showHeaderAdminBar) ? 'show-admin-bar' : '' }}">
<!--<![endif]-->
<head>
    @include('front/_shared/_metas')

    <!-- OTHER PLUGINS -->
    @yield('css')
    <!-- END OTHER PLUGINS -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/theme/clean-blog/css/clean-blog.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->

    @if($showHeaderAdminBar)
        <link rel="stylesheet" href="/admin/css/admin-bar.css">
    @endif

    <link rel="shortcut icon" href="/images/logo/favicon.png"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    {!! $CMSSettings['google_analytics'] or '' !!}
</head>

<body class="on-loading {{ $bodyClass or '' }}">

@if($showHeaderAdminBar)
    @include('admin/_shared/_admin-bar')
@endif

<div class="site-wrapper">
    <header class="header">
        @include('front/_shared/_header')
    </header>

    <main class="main">
        @yield('content')
    </main>

    <hr>

    <footer class="footer">
        @include('front/_shared/_footer')
    </footer>
</div>

<!--Modals-->
@include('front/_shared/_modals')

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--Google captcha-->
@include('front/_shared/_google-captcha')
<!--Google captcha-->

<!-- BEGIN CORE PLUGINS -->
<script src="/dist/core.min.js"></script>
<!-- END CORE PLUGINS -->

<!-- OTHER PLUGINS -->
@yield('js')
<!-- END OTHER PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/dist/app.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="/theme/clean-blog/js/clean-blog.js"></script>

<!-- JS INIT -->
@yield('js-init')
<!-- JS INIT -->

@include('front/_shared/_flash-messages')

</body>

</html>