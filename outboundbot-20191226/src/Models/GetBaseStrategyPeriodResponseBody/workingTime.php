<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetBaseStrategyPeriodResponseBody;

use AlibabaCloud\Tea\Model;

class workingTime extends Model
{
    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $beginTimeMillis;

    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $endTimeMillis;
    protected $_name = [
        'beginTime'       => 'BeginTime',
        'beginTimeMillis' => 'BeginTimeMillis',
        'endTime'         => 'EndTime',
        'endTimeMillis'   => 'EndTimeMillis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->beginTimeMillis) {
            $res['BeginTimeMillis'] = $this->beginTimeMillis;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeMillis) {
            $res['EndTimeMillis'] = $this->endTimeMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workingTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['BeginTimeMillis'])) {
            $model->beginTimeMillis = $map['BeginTimeMillis'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeMillis'])) {
            $model->endTimeMillis = $map['EndTimeMillis'];
        }

        return $model;
    }
}
