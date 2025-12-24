<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody\scalingActivityErrorCodeStatistics;

use AlibabaCloud\Dara\Model;

class errorStatistic extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'count' => 'Count',
        'errorCode' => 'ErrorCode',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
