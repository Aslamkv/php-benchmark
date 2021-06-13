# PhpBenchmark
Lightweight PHP library to measure memory usage and time taken for script execution

## Installation

```
composer require aslamkv/php-benchmark
```

## Usage

```php
echo PhpBenchmark\PhpBenchmark::run(function(){
  $a=[];
  $size=1000;
  for($i=0;$i<$size;$i++){
    $a[]='aaa'.$i;
  }
});
```
