# Laravel Frustration

![hero](https://res.cloudinary.com/ichtrojan/image/upload/v1589558568/frstration_ddnv00.png)

## Introduction

This package main purpose is to "Frustrate your enemies". Alright, let's be serious. This package will redirect URL guessers to any of the random URL that you specify. 

## Use case

This is a laravel package but you will have some users that want to access `/wp-admin.php` trying to assume that your application is built on Wordpress. By default, it will return a 404 but let's not let it end there, let's frustrate them.

## Installation

To install this package run:

```bash
composer install ichtrojan/laravel-frustration
```

This will install the madness in this repo.

Next, export the config file by running:

```bash
php artisan vendor:publish --tag=frustration
```

This will publish the default config in `config/frustration.php`.

## Usage

The only source of truth is `frustration.php`, here's what it looks like:

```php
<?php

return [
    'routes' => [
        'wp-admin.php', 'index.php', 'wp-login.php'
    ],

    'redirect' => [
        'https://www.fbi.gov/wanted',
        'https://www.youtube.com/watch?v=pok8H_KF1FA',
        'https://fast.com',
        'http://www.omfgdogs.com',
        'https://cat-bounce.com'
    ]
];
```

the `routes` key is an array of forbidden routes while the `redirect` key is an array of random URLs that you decide to redirect your victims to.

>**NOTE**<br/>
> * The forbidden routes should exist without the forward-slash `/`
> * It will be nice to sneak in pornhub in there, just saying 🤫

## Conclusion

I want to do more with this package, probably when I get bored next. Special thanks to Vibes and Insha-Allah. Please if you find any issue or have a cool feature idea do send in a PR.

