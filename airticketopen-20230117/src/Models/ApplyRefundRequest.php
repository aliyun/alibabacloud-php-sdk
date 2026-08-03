<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class ApplyRefundRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'orderNo' => 'OrderNo',
        'refundReason' => 'RefundReason',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->refundReason) {
            $res['RefundReason'] = $this->refundReason;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['RefundReason'])) {
            $model->refundReason = $map['RefundReason'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
