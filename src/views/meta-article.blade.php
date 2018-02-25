@if(isset($title,$description,$image) && !empty($title) && !empty($description) && !empty($image))
    <!-- All Common -->
    <meta property="og:type"            content="article" />
    <meta property="og:image"           content="{{ $image }}" />

    @if(isset($author) && $author !=='')
    <meta name="author"                 content="{{ $author }}" />
    <meta name="twitter:creator"        content="{{ $author }}">
    @endif

    <!-- Facebook -->
    <meta property="og:url"             content="{{ url()->current() }}" />
    <meta property="og:title"           content="{{ $title }}" />
    <meta property="og:description"     content="{{ $description }}" />
    @if(config('social.fb_app_id') !=='')
        <meta name="fb:app_id"          content="{{  config('social.fb_app_id') }}">
    @endif


    <!-- Twitter Summary Card With Large Image -->
    <meta name="twitter:card"           content="{{ $image }}">
    @if(config('social.twitter_site') !=='')
        <meta name="twitter:site"       content="{{  config('social.twitter_site') }}">
    @endif
    <meta name="twitter:title"          content="{{ $title }}">
    <meta name="twitter:description"    content="{{ $description }}">
    <meta name="twitter:image"          content="{{ $image }}">

    <!-- Google Plus Full-Bleed Image -->
    <meta itemprop="og:headline"        content="{{ $image }}" />
    <meta itemprop="og:description"     content="{{ $description }}" />
@endif