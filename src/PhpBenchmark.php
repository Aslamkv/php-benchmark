<?php

namespace PhpBenchmark;

declare(strict_types=1);

final class PhpBenchmark{
  public static function run($callback){
    try{
      $memory_before=memory_get_usage();
      $start_time=microtime(true);
      $callback();
      $used_memory=(memory_get_peak_usage()-$memory_before);
      $time_taken=microtime(true)-$start_time;
      $used_memory_in_readable_format=self::get_bytes_in_readable_format($used_memory);
      $time_taken_in_readable_format=self::get_seconds_in_readable_format($time_taken);
      return self::get_benchmark_message(
        $used_memory_in_readable_format,
        $time_taken_in_readable_format
      );
    }catch(Throwable $t){
      throw $t;
    }
  }

  private static function get_bytes_in_readable_format($bytes){
    try{
      $unit=intval(log($bytes,1024));
      $units=['B','KB','MB','GB','TB'];
      $formatted_bytes=$bytes/pow(1024,$unit);
      return sprintf(
        '%d %s',
        $formatted_bytes,
        $units[$unit]
      );
    }catch(Throwable $t){
      throw $t;
    }
  }

  private static function get_seconds_in_readable_format($seconds){
    try{
      $microseconds=$seconds*pow(10,6);
      $unit=intval(
        log($microseconds,1000)
      );
      $units=['µs','ms','s'];
      $formatted_seconds=$microseconds/pow(1000,$unit);
      return sprintf(
        '%.2f %s',
        $formatted_seconds,
        $units[$unit]
      );
    }catch(Throwable $t){
      throw $t;
    }
  }

  private static function get_benchmark_message($used_memory,$time_taken){
    try{
      $current_datetime=date('Y-m-d H:i:s');
      $message="<pre>";
      $message.="\nRunning benchmark at $current_datetime\n";
      $message.="\nUsed memory: $used_memory";
      $message.="\nTime taken: $time_taken";
      $message.="</pre>";
      return $message;
    }catch(Throwable $t){
      throw $t;
    }
  }
}
