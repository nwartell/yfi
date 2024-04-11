# nwartell/yfi
YFi: An easy YFinance wrapper for PHP

[![Latest Stable Version](http://poser.pugx.org/nwartell/yfi/v)](https://packagist.org/packages/nwartell/yfi) [![Total Downloads](http://poser.pugx.org/nwartell/yfi/downloads)](https://packagist.org/packages/nwartell/yfi) [![Latest Unstable Version](http://poser.pugx.org/nwartell/yfi/v/unstable)](https://packagist.org/packages/nwartell/yfi) [![License](http://poser.pugx.org/nwartell/yfi/license)](https://packagist.org/packages/nwartell/yfi) [![PHP Version Require](http://poser.pugx.org/nwartell/yfi/require/php)](https://packagist.org/packages/nwartell/yfi)


## Installation
1. Ensure composer is initialized for your project directory and its autoloader is required
2. Open a terminal window and navigate to your project directory 
3. `composer require nwartell/yfi`
4. Ready to go!

## Usage

```php
<?php
use Nwartell\YFi\YFi;

$yfi = new YFi('aapl', '1d', '1y');

print_r($yfi->meta());
echo $yfi->marketPrice();

?>
```

### With JSON header

```php
<?php
use Nwartell\YFi\YFi;
header("Content-Type: application/json");

echo YFi::quote('AAPL', '1d', '1y'); // returns full JSON-encoded array
?>
```


