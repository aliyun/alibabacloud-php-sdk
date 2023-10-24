<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\insureOrder\applicant;
use AlibabaCloud\Tea\Model;

class insureOrder extends Model
{
    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @example 5142701029379
     *
     * @var string
     */
    public $bizOrderId;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizType;

    /**
     * @example 2023-04-11T21:21Z
     *
     * @var string
     */
    public $closeTime;

    /**
     * @example 100000000001
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @example 200300333333
     *
     * @var string
     */
    public $outInsOrderId;

    /**
     * @example 2023-04-11T21:21Z
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 83000
     *
     * @var int
     */
    public $price;

    /**
     * @example 4
     *
     * @var int
     */
    public $settleType;

    /**
     * @example PAID
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicant'     => 'applicant',
        'bizOrderId'    => 'biz_order_id',
        'bizType'       => 'biz_type',
        'closeTime'     => 'close_time',
        'insOrderId'    => 'ins_order_id',
        'outInsOrderId' => 'out_ins_order_id',
        'payTime'       => 'pay_time',
        'price'         => 'price',
        'settleType'    => 'settle_type',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = null !== $this->applicant ? $this->applicant->toMap() : null;
        }
        if (null !== $this->bizOrderId) {
            $res['biz_order_id'] = $this->bizOrderId;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->closeTime) {
            $res['close_time'] = $this->closeTime;
        }
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->outInsOrderId) {
            $res['out_ins_order_id'] = $this->outInsOrderId;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insureOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicant'])) {
            $model->applicant = applicant::fromMap($map['applicant']);
        }
        if (isset($map['biz_order_id'])) {
            $model->bizOrderId = $map['biz_order_id'];
        }
        if (isset($map['biz_type'])) {
            $model->bizType = $map['biz_type'];
        }
        if (isset($map['close_time'])) {
            $model->closeTime = $map['close_time'];
        }
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }
        if (isset($map['out_ins_order_id'])) {
            $model->outInsOrderId = $map['out_ins_order_id'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
