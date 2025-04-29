<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class InsureOrderCreateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicantShrink;

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
    public $insPersonAndSegmentListShrink;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $outInsOrderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'applicantShrink' => 'applicant',
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'insPersonAndSegmentListShrink' => 'ins_person_and_segment_list',
        'isvName' => 'isv_name',
        'outInsOrderId' => 'out_ins_order_id',
        'outOrderId' => 'out_order_id',
        'outSubOrderId' => 'out_sub_order_id',
        'supplierCode' => 'supplier_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicantShrink) {
            $res['applicant'] = $this->applicantShrink;
        }

        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }

        if (null !== $this->insPersonAndSegmentListShrink) {
            $res['ins_person_and_segment_list'] = $this->insPersonAndSegmentListShrink;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->outInsOrderId) {
            $res['out_ins_order_id'] = $this->outInsOrderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
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
        if (isset($map['applicant'])) {
            $model->applicantShrink = $map['applicant'];
        }

        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }

        if (isset($map['ins_person_and_segment_list'])) {
            $model->insPersonAndSegmentListShrink = $map['ins_person_and_segment_list'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['out_ins_order_id'])) {
            $model->outInsOrderId = $map['out_ins_order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }

        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        return $model;
    }
}
