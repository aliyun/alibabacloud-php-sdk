<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ScalingAnalyzeTimeRange extends Model
{
    /**
     * @description 结束时间。
     *
     * @example 1676441972000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 起始时间。
     *
     * @example 1676441971000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 峰谷类型。 peak/valley
     *
     * @example peak
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingAnalyzeTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
