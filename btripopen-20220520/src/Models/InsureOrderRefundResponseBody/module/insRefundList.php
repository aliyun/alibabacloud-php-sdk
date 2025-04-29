<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody\module;

use AlibabaCloud\Dara\Model;

class insRefundList extends Model
{
    /**
     * @var string
     */
    public $policyRefundNo;

    /**
     * @var string
     */
    public $refundStatus;

    /**
     * @var string
     */
    public $subInsOrderId;
    protected $_name = [
        'policyRefundNo' => 'policy_refund_no',
        'refundStatus' => 'refund_status',
        'subInsOrderId' => 'sub_ins_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyRefundNo) {
            $res['policy_refund_no'] = $this->policyRefundNo;
        }

        if (null !== $this->refundStatus) {
            $res['refund_status'] = $this->refundStatus;
        }

        if (null !== $this->subInsOrderId) {
            $res['sub_ins_order_id'] = $this->subInsOrderId;
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
        if (isset($map['policy_refund_no'])) {
            $model->policyRefundNo = $map['policy_refund_no'];
        }

        if (isset($map['refund_status'])) {
            $model->refundStatus = $map['refund_status'];
        }

        if (isset($map['sub_ins_order_id'])) {
            $model->subInsOrderId = $map['sub_ins_order_id'];
        }

        return $model;
    }
}
