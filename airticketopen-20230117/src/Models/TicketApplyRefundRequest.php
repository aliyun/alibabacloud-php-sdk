<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class TicketApplyRefundRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var string
     */
    public $distributorOrderId;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var string
     */
    public $refundRemark;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'distributorOrderId' => 'DistributorOrderId',
        'refundReason' => 'RefundReason',
        'refundRemark' => 'RefundRemark',
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

        if (null !== $this->distributorOrderId) {
            $res['DistributorOrderId'] = $this->distributorOrderId;
        }

        if (null !== $this->refundReason) {
            $res['RefundReason'] = $this->refundReason;
        }

        if (null !== $this->refundRemark) {
            $res['RefundRemark'] = $this->refundRemark;
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

        if (isset($map['DistributorOrderId'])) {
            $model->distributorOrderId = $map['DistributorOrderId'];
        }

        if (isset($map['RefundReason'])) {
            $model->refundReason = $map['RefundReason'];
        }

        if (isset($map['RefundRemark'])) {
            $model->refundRemark = $map['RefundRemark'];
        }

        return $model;
    }
}
