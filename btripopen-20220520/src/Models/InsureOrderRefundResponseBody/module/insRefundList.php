<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody\module;

use AlibabaCloud\Tea\Model;

class insRefundList extends Model
{
    /**
     * @example po102000399221
     *
     * @var string
     */
    public $policyRefundNo;

    /**
     * @example REFUND_SUCCESS
     *
     * @var string
     */
    public $refundStatus;

    /**
     * @example 1230012499921
     *
     * @var string
     */
    public $subInsOrderId;
    protected $_name = [
        'policyRefundNo' => 'policy_refund_no',
        'refundStatus'   => 'refund_status',
        'subInsOrderId'  => 'sub_ins_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return insRefundList
     */
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
