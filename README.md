# CSV to Array and Array to CSV For Laravel

### Usage
```php
<?php
	
    use Pymyoswe\Csv\CsvService;

    $csvService = new CsvService();
    $csvService->csv_to_array("Here is csv file");
    $csvService->array_to_csv("Here is array");
?>
```