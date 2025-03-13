<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

if (file_exists(__DIR__.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'autoload.php')) {
    require_once __DIR__.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'autoload.php';
}

spl_autoload_register(function ($class) {
    $name = str_replace('AlibabaCloud\SDK\DianJin\V20240628\\', '', $class);
    $file = __DIR__.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.str_replace('\\', \DIRECTORY_SEPARATOR, $name).'.php';
    if (file_exists($file)) {
        require_once $file;

        return true;
    }

    return false;
});
