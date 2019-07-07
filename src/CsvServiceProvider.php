<?php
namespace Pymyoswe\Csv;
  
use Illuminate\Support\ServiceProvider;
use Pymyoswe\Csv\CsvService;
  
class CsvServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }
  
    public function register()
    {
        $this->app->bind(__DIR__.'\CsvService', function ($app) {
          return new CsvService();
        });
    }
}