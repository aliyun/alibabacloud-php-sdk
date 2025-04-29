<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class InsureOrderRefundShrinkRequest extends Model
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
     * @var string
     */
    public $policyNoListShrink;

    /**
     * @var string
     */
    public $subInsOrderIdsShrink;

    /**
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'isvName' => 'isv_name',
        'outApplyId' => 'out_apply_id',
        'policyNoListShrink' => 'policy_no_list',
        'subInsOrderIdsShrink' => 'sub_ins_order_ids',
        'supplierCode' => 'supplier_code',
    ];

    public function validate()
    {
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

        if (null !== $this->policyNoListShrink) {
            $res['policy_no_list'] = $this->policyNoListShrink;
        }

        if (null !== $this->subInsOrderIdsShrink) {
            $res['sub_ins_order_ids'] = $this->subInsOrderIdsShrink;
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
            $model->policyNoListShrink = $map['policy_no_list'];
        }

        if (isset($map['sub_ins_order_ids'])) {
            $model->subInsOrderIdsShrink = $map['sub_ins_order_ids'];
        }

        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        return $model;
    }
}
