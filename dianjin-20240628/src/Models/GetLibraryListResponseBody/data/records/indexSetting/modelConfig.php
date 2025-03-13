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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Tea\Model;

class modelConfig extends Model
{
    /**
     * @example 0.8
     *
     * @var float
     */
    public $temperature;

    /**
     * @description topP
     *
     * @example 0.8
     *
     * @var float
     */
    public $topP;
    protected $_name = [
        'temperature' => 'temperature',
        'topP' => 'topP',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }
        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }
        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
