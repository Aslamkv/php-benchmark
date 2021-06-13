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

> Output

![image](https://user-images.githubusercontent.com/12555115/121805323-736b2980-cc68-11eb-9aef-7c33e4582c6c.png)

