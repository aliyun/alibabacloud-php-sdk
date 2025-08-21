<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;

use AlibabaCloud\Dara\Model;

class accData extends Model
{
    /**
     * @var int
     */
    public $failedNum;

    /**
     * @var int
     */
    public $successNum;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'failedNum' => 'FailedNum',
        'successNum' => 'SuccessNum',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
