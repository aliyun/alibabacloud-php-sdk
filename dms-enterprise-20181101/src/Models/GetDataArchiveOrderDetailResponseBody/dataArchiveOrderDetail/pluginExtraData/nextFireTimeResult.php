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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Tea\Model;

class nextFireTimeResult extends Model
{
    /**
     * @description The type of scheduled triggering.
     *
     * @example NOT_SET
     *
     * @var string
     */
    public $cronFireType;
    protected $_name = [
        'cronFireType' => 'CronFireType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronFireType) {
            $res['CronFireType'] = $this->cronFireType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextFireTimeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronFireType'])) {
            $model->cronFireType = $map['CronFireType'];
        }

        return $model;
    }
}
