<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataResponseBody;

use AlibabaCloud\Dara\Model;

class extend extends Model
{
    /**
     * @var string
     */
    public $actualEndTime;

    /**
     * @var string
     */
    public $actualStartTime;

    /**
     * @var int
     */
    public $intervalSeconds;
    protected $_name = [
        'actualEndTime' => 'ActualEndTime',
        'actualStartTime' => 'ActualStartTime',
        'intervalSeconds' => 'IntervalSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualEndTime) {
            $res['ActualEndTime'] = $this->actualEndTime;
        }

        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }

        if (null !== $this->intervalSeconds) {
            $res['IntervalSeconds'] = $this->intervalSeconds;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualEndTime'])) {
            $model->actualEndTime = $map['ActualEndTime'];
        }

        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }

        if (isset($map['IntervalSeconds'])) {
            $model->intervalSeconds = $map['IntervalSeconds'];
        }

        return $model;
    }
}
