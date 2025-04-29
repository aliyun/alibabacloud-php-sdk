<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CooperatorSyncPayStatusRequest extends Model
{
    /**
     * @var string
     */
    public $cooperatorOrderId;

    /**
     * @var string
     */
    public $cooperatorPayNo;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payTime;
    protected $_name = [
        'cooperatorOrderId' => 'cooperator_order_id',
        'cooperatorPayNo' => 'cooperator_pay_no',
        'orderId' => 'order_id',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperatorOrderId) {
            $res['cooperator_order_id'] = $this->cooperatorOrderId;
        }

        if (null !== $this->cooperatorPayNo) {
            $res['cooperator_pay_no'] = $this->cooperatorPayNo;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
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
        if (isset($map['cooperator_order_id'])) {
            $model->cooperatorOrderId = $map['cooperator_order_id'];
        }

        if (isset($map['cooperator_pay_no'])) {
            $model->cooperatorPayNo = $map['cooperator_pay_no'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        return $model;
    }
}
