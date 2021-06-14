# PhpBenchmark
Lightweight PHP library to measure memory usage and time taken for script execution

## Installation

```
composer require aslamkv/php-benchmark
```

## Usage

```php
PhpBenchmark\PhpBenchmark::run(function(){
  $a=[];
  $size=1000;
  for($i=0;$i<$size;$i++){
    $a[]='aaa'.$i;
  }
});
```

> Output

![image](https://user-images.githubusercontent.com/12555115/121841523-191ba880-ccfc-11eb-9561-905ecd87acac.png)
