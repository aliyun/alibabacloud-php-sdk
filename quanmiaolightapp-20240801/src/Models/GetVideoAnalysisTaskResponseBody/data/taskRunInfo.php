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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskRunInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $concurrentChargeEnable;

    /**
     * @example 1
     *
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'concurrentChargeEnable' => 'concurrentChargeEnable',
        'responseTime' => 'responseTime',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrentChargeEnable) {
            $res['concurrentChargeEnable'] = $this->concurrentChargeEnable;
        }
        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRunInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['concurrentChargeEnable'])) {
            $model->concurrentChargeEnable = $map['concurrentChargeEnable'];
        }
        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
