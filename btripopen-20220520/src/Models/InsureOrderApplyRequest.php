<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InsureOrderApplyRequest extends Model
{
    /**
     * @example 100000102
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @example 1000003000000490
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @example PostalSavingsBank
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 202310101026030
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1020030003332000
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @example fliggy
     *
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'btripUserId'   => 'btrip_user_id',
        'buyerName'     => 'buyer_name',
        'insOrderId'    => 'ins_order_id',
        'isvName'       => 'isv_name',
        'outOrderId'    => 'out_order_id',
        'outSubOrderId' => 'out_sub_order_id',
        'supplierCode'  => 'supplier_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
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

    /**
     * @param array $map
     *
     * @return InsureOrderApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
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
