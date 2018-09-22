# provide-php
This is the PHP library for interacting with https://provide.services

A Postman collection is published here for the API:
https://documenter.getpostman.com/view/3936015/RWaPskh7

## Requirements

Guzzle: 5.3.3   commit 93bbdb30d59be6cd9839495306c65f2907370eb9
Guzzle is a PHP HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services.
https://github.com/guzzle/guzzle


The recommended way to install Guzzle is through Composer.

### Install Composer
curl -sS https://getcomposer.org/installer | php
Next, run the Composer command to install the latest stable version of Guzzle:

php composer.phar require guzzlehttp/guzzle
After installing, you need to require Composer's autoloader:

require 'vendor/autoload.php';
You can then later update Guzzle using composer:

composer.phar update

# Example Usage
```php
$test = new Goldmine("https","goldmine.provide.services",$api_key);
$res = $test->fetch_contracts();
```
