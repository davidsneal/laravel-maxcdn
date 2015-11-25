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

## .env
```php
MAXCDN_ALIAS=
MAXCDN_KEY=
MAXCDN_SECRET=
```

##YourController.php

```php
use Davidsneal\MaxCDN\MaxCDN;
```
 
## Usage
```php
$cdn = new MaxCDN();
$cdn->delete('/zones/pull.json/{zone-id}/cache', [
    'file' => '/test.jpg'
]);
```
