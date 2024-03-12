<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;

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
     * @example 2023-03-28 06:04:29
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-03-28 06:04:29
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'effectType' => 'EffectType',
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

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
