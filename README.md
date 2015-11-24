##composer.json

```php
"autoload": {
    "psr-4": {
        "Davidsneal\\MaxCDN\\": "vendor/davidsneal/laravel-maxcdn/src"
    }
},
"require": {
    "davidsneal/laravel-maxcdn": "dev-master"
},
```

##config/app.php

```php
'providers' => [
    Davidsneal\MaxCDN\MaxCDNServiceProvider::class,
],
```

##YourController.php

```php
use Davidsneal\MaxCDN\MaxCDN;
```
 
## Usage
```php
<?php

$api = new MaxCDN("my_alias","consumer_key","consumer_secret");

// get account information
echo  $api->get('/account.json');

// delete a file from the cache
$params = array('file' => '/robots.txt');
echo $api->delete('/zones/pull.json/{zone-id}/cache', $params);

?>
```

## Methods

It has support for `GET`, `POST`, `PUT` and `DELETE` OAuth signed requests.
