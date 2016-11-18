# Easy Social Share Cards for Your Laravel App

## Installation

First, pull in the package through Composer.

	composer require setkyar/laravel-social-share-cards

And then, if using Laravel 5, include the service provider within `config/app.php`.

	'providers' => [
	    SetKyar\Social\SocialServiceProvider::class,
	];

Run `php artisan vendor:publish` to get config of Laravel social share config.

## Usage

Setup FB APP ID and your site's twitter account in `social.php` config. (Those are optional)

    fb_app_id
    twitter_site

Include meta-article in the head tag with `title`, `description`, and `image` which you want to appear on Facebook, Twitter and Google+

	@include('social::meta-article', [
	    'title'         => 'Hello World',
	    'description'   => 'Welcome from Hello World',
	    'image'         => 'http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg'
	])