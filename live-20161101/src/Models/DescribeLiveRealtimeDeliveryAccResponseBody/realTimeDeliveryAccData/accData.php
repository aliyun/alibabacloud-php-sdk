<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData;

use AlibabaCloud\Tea\Model;

class accData extends Model
{
    /**
     * @description The number of failed real-time log deliveries.
     *
     * @example 0
     *
     * @var int
     */
    public $failedNum;

    /**
     * @description The number of successful real-time log deliveries.
     *
     * @example 321321
     *
     * @var int
     */
    public $successNum;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'failedNum' => 'FailedNum',
        'successNum' => 'SuccessNum',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

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
