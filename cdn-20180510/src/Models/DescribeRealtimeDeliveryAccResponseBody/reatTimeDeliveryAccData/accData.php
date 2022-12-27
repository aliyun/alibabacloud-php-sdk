<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;

use AlibabaCloud\Tea\Model;

class accData extends Model
{
    /**
     * @description The number of failed attempts to deliver log data to Log Service.
     *
     * @example 2
     *
     * @var int
     */
    public $failedNum;

    /**
     * @description The number of successful deliveries of log data to Log Service.
     *
     * @example 2
     *
     * @var int
     */
    public $successNum;

    /**
     * @description The timestamp of the data.
     *
     * @example 2018-09-03T06:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'failedNum'  => 'FailedNum',
        'successNum' => 'SuccessNum',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
