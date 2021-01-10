<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData;

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
    public $successNum;

    /**
     * @var int
     */
    public $failedNum;
    protected $_name = [
        'timeStamp'  => 'TimeStamp',
        'successNum' => 'SuccessNum',
        'failedNum'  => 'FailedNum',
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
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
        }
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
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
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }

        return $model;
    }
}
