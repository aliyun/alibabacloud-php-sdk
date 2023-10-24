<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponseBody\module;

use AlibabaCloud\Tea\Model;

class insOrderPolicyList extends Model
{
    /**
     * @example 1022196500378006
     *
     * @var string
     */
    public $outSubInsOrderId;

    /**
     * @example po10002300201
     *
     * @var string
     */
    public $policyNo;

    /**
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @example 1022196500378003
     *
     * @var string
     */
    public $subInsOrderId;
    protected $_name = [
        'outSubInsOrderId' => 'out_sub_ins_order_id',
        'policyNo'         => 'policy_no',
        'status'           => 'status',
        'subInsOrderId'    => 'sub_ins_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outSubInsOrderId) {
            $res['out_sub_ins_order_id'] = $this->outSubInsOrderId;
        }
        if (null !== $this->policyNo) {
            $res['policy_no'] = $this->policyNo;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subInsOrderId) {
            $res['sub_ins_order_id'] = $this->subInsOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insOrderPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['out_sub_ins_order_id'])) {
            $model->outSubInsOrderId = $map['out_sub_ins_order_id'];
        }
        if (isset($map['policy_no'])) {
            $model->policyNo = $map['policy_no'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sub_ins_order_id'])) {
            $model->subInsOrderId = $map['sub_ins_order_id'];
        }

        return $model;
    }
}
