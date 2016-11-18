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

Include meta-article in the head tag with `title`, `description`, and `image` which you want to appear on Facebook, Twitter and Google+ .

>  `title`, `description`, and `image` must fill! `author` is
> optional!

	@include('social::meta-article', [
	    'title'         => 'Hello World',
	    'description'   => 'Welcome from Hello World',
	    'image'         => 'http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg',
		'author'        => 'Set Kyar Wa Lar'
	])

### Example

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        @include('social::meta-article', [
    	    'title'         => 'Hello World',
    	    'description'   => 'Welcome from Hello World',
    	    'image'         => 'http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg',
    		'author'        => 'Set Kyar Wa Lar'
    	])
        <title>Document</title>
    </head>
    <body>
    
    </body>
    </html>

### Example Appearance

![Facebook Apperance](example/fb.png)
![Twitter Apperance](example/twitter.jpg)
![Google+ Apperance](example/gplus.jpg)

##Contributing

 1. Fork it 
 2. Create your feature branch (git checkout -b my-new-feature)
 3. Commit your changes (git commit -am 'Added some feature') 
 4. Push to the branch (git push origin my-new-feature) 
 5. Create new Pull Request

## Thanks

 - Thanks [Jeffrey Way](https://github.com/JeffreyWay) for [laracast flash](https://github.com/laracasts/flash), [POVILAS KOROP](https://twitter.com/PovilasKorop) for [this tutorial](http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/) and [Philip Brown](https://github.com/philipbrown) for [this tutorial](http://culttt.com/2014/05/07/create-psr-4-php-package/) :)