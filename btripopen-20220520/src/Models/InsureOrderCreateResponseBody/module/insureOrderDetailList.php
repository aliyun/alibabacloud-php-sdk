<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponseBody\module;

use AlibabaCloud\Dara\Model;

class insureOrderDetailList extends Model
{
    /**
     * @var string
     */
    public $outSubInsOrderId;

    /**
     * @var string
     */
    public $policyNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subInsOrderId;
    protected $_name = [
        'outSubInsOrderId' => 'out_sub_ins_order_id',
        'policyNo' => 'policy_no',
        'status' => 'status',
        'subInsOrderId' => 'sub_ins_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
