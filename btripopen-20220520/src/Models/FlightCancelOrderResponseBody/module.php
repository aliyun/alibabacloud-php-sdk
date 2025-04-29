<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $cancelTime;

    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $orderStatus;
    protected $_name = [
        'cancelTime' => 'cancel_time',
        'failCode' => 'fail_code',
        'failReason' => 'fail_reason',
        'orderStatus' => 'order_status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }

        if (null !== $this->failCode) {
            $res['fail_code'] = $this->failCode;
        }

        if (null !== $this->failReason) {
            $res['fail_reason'] = $this->failReason;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
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
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }

        if (isset($map['fail_code'])) {
            $model->failCode = $map['fail_code'];
        }

        if (isset($map['fail_reason'])) {
            $model->failReason = $map['fail_reason'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        return $model;
    }
}
