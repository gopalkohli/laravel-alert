# Laravel Alert
Alert session notifications

```
php composer require  xpromx/laravel-alert dev-master
```

## Usage

```php

// div.alert-success
Alert::success('Saved!');

// div.alert-danger
Alert::danger('Error!');

// div.alert-warning
Alert::warning('Try again!');

// div.alert-info
Alert::info('Welcome back!');

// destroy the session
Alert::expire();

// render the html template to show the notification
{!! Alert::render() !!}



```


