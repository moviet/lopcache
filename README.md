# Laravel Opcache

Simple php opcache using laravel commands for most versions minimum v5.3.

## **Installation**
The package can be installed via composer:
```
composer require moviet/opcache dev-main
```

## **Usage**

Flush the contents of the opcache:
```
php artisan opcache:clear
```

Show configuration information about the cache:
```
php artisan opcache:config
```

Get status information about the cache:
```
php artisan opcache:status
```

### Use Manual Code

```php
use Moviet\Opcache\Opcode;

Opcode::clear();
Opcode::getConfig();
Opcode::getStatus();
```