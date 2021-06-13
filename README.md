# PhpBenchmark
Lightweight PHP library to measure memory usage and time taken for script execution

## Usage

```php
echo PhpBenchmark::run(function(){
  $a=[];
  $size=1000;
  for($i=0;$i<$size;$i++){
    $a[]='aaa'.$i;
  }
});
```
