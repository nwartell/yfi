# nwartell\yfi
YFi: An easy YFinance wrapper for PHP

## Usage
### With JSON header

```php
<?php
use Nwartell\YFi\YFi;
header("Content-Type: application/json");

echo YFi::quote('AAPL', '1d', '1y'); // returns full JSON-encoded array
?>
```


