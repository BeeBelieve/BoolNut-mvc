<?php

namespace core\logger;

use RuntimeException;

class LogFile implements Logger
{

    public function info($data)
    {
        return self::log($data, "info.log");
    }

    public function error($data)
    {
        return self::log($data, "error.log");
    }

    private function log($data, $filename = "log.log")
    {
        if (!file_exists("../logs/") && (!mkdir("../logs/", 0777, true) && !is_dir($filename))) {
            throw new RuntimeException(sprintf('Folder "%s" was not created', $filename));
        }
        return file_put_contents("../logs/" . $filename, date("Y-m-d h:i:sa") . " " . $data . "\n", FILE_APPEND);
    }
}