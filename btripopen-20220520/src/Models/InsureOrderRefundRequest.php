<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class InsureOrderRefundRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $outApplyId;

    /**
     * @var string[]
     */
    public $policyNoList;

    /**
     * @var string[]
     */
    public $subInsOrderIds;

    /**
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'isvName' => 'isv_name',
        'outApplyId' => 'out_apply_id',
        'policyNoList' => 'policy_no_list',
        'subInsOrderIds' => 'sub_ins_order_ids',
        'supplierCode' => 'supplier_code',
    ];

    public function validate()
    {
        if (\is_array($this->policyNoList)) {
            Model::validateArray($this->policyNoList);
        }
        if (\is_array($this->subInsOrderIds)) {
            Model::validateArray($this->subInsOrderIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }

        if (null !== $this->policyNoList) {
            if (\is_array($this->policyNoList)) {
                $res['policy_no_list'] = [];
                $n1 = 0;
                foreach ($this->policyNoList as $item1) {
                    $res['policy_no_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subInsOrderIds) {
            if (\is_array($this->subInsOrderIds)) {
                $res['sub_ins_order_ids'] = [];
                $n1 = 0;
                foreach ($this->subInsOrderIds as $item1) {
                    $res['sub_ins_order_ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supplierCode) {
            $res['supplier_code'] = $this->supplierCode;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }

        if (isset($map['policy_no_list'])) {
            if (!empty($map['policy_no_list'])) {
                $model->policyNoList = [];
                $n1 = 0;
                foreach ($map['policy_no_list'] as $item1) {
                    $model->policyNoList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sub_ins_order_ids'])) {
            if (!empty($map['sub_ins_order_ids'])) {
                $model->subInsOrderIds = [];
                $n1 = 0;
                foreach ($map['sub_ins_order_ids'] as $item1) {
                    $model->subInsOrderIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        return $model;
    }
}
