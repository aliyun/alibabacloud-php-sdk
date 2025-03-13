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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class GenerateBroadcastNewsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $prompt;
    protected $_name = [
        'prompt' => 'prompt',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateBroadcastNewsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        return $model;
    }
}
