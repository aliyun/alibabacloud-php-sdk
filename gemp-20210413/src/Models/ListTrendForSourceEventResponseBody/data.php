<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListTrendForSourceEventResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 收敛率
     *
     * @var string
     */
    public $convergenceRate;

    /**
     * @description 最大持续时长
     *
     * @var int
     */
    public $maxSustainTime;

    /**
     * @description 是否跨天
     *
     * @var bool
     */
    public $skipDay;

    /**
     * @description 按监控源分组统计数据
     *
     * @var mixed[]
     */
    public $sourceEventsStatMap;

    /**
     * @description 时间单位
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'convergenceRate'     => 'convergenceRate',
        'maxSustainTime'      => 'maxSustainTime',
        'skipDay'             => 'skipDay',
        'sourceEventsStatMap' => 'sourceEventsStatMap',
        'unit'                => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convergenceRate) {
            $res['convergenceRate'] = $this->convergenceRate;
        }
        if (null !== $this->maxSustainTime) {
            $res['maxSustainTime'] = $this->maxSustainTime;
        }
        if (null !== $this->skipDay) {
            $res['skipDay'] = $this->skipDay;
        }
        if (null !== $this->sourceEventsStatMap) {
            $res['sourceEventsStatMap'] = $this->sourceEventsStatMap;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['convergenceRate'])) {
            $model->convergenceRate = $map['convergenceRate'];
        }
        if (isset($map['maxSustainTime'])) {
            $model->maxSustainTime = $map['maxSustainTime'];
        }
        if (isset($map['skipDay'])) {
            $model->skipDay = $map['skipDay'];
        }
        if (isset($map['sourceEventsStatMap'])) {
            $model->sourceEventsStatMap = $map['sourceEventsStatMap'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
