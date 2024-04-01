# nwartell\yfi
YFi: An easy YFinance wrapper for PHP

## Installation
1. Ensure composer is initialized for your project directory and its autoloader is required
2. Open a terminal window and navigate to your project directory 
3. `composer require nwartell\yfi`
4. Ready to go!

## Usage
### With JSON header

```php
<?php
use Nwartell\YFi\YFi;
header("Content-Type: application/json");

echo YFi::quote('AAPL', '1d', '1y'); // returns full JSON-encoded array
?>
```


