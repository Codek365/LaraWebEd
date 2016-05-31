<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ '/'.$currentLanguageCode }}">
                <span>{{ $CMSSettings['site_title'] or '' }}</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right languages">
                @foreach($activatedLanguages as $key => $row)
                    <li class="">
                        <a class="" href="/{{ $row->language_code or '' }}" title="{{ $row->language_name or '' }}">
                            <img src="/images/flags/{{ $row->language_code or 'en' }}.png"
                                 alt="{{ $row->language_name or '' }}" class="img-responsive">
                        </a>
                    </li>
                @endforeach
            </ul>
            {!! $CMSMenuHtml or '' !!}
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<div class="intro-header" style="background-image: url('{{ $object->thumbnail or '/theme/clean-blog/img/home-bg.jpg' }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>{{ _getField($currentObjectCustomFields, '4_jumbotron_text') }}</h1>
                    <hr class="small">
                    <span class="subheading">{{ _getField($currentObjectCustomFields, '5_jumbotron_caption') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>