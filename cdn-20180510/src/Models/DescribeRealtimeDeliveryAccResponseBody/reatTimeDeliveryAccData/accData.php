<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;

use AlibabaCloud\Tea\Model;

class accData extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $failedNum;

    /**
     * @var int
     */
    public $successNum;
    protected $_name = [
        'timeStamp'  => 'TimeStamp',
        'failedNum'  => 'FailedNum',
        'successNum' => 'SuccessNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }

        return $model;
    }
}
