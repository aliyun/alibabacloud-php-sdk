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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail;

use AlibabaCloud\Tea\Model;

class effectConfig extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $effectType;

    /**
     * @example 2023-11-25 14:21:15
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-11-25 14:21:15
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'effectType' => 'EffectType',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectType) {
            $res['EffectType'] = $this->effectType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectType'])) {
            $model->effectType = $map['EffectType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
