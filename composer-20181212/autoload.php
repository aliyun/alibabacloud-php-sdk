<?php

spl_autoload_register(function ($class) {
    $name = str_replace('AlibabaCloud\\SDK\\Composer\\V20181212\\', '', $class);
    $file = __DIR__ . \DIRECTORY_SEPARATOR . 'src' . \DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
    if (file_exists($file)) {
        require_once $file;

        return true;
    }

    return false;
});
