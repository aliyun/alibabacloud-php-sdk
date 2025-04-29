<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\insureOrder\applicant;

class insureOrder extends Model
{
    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @var string
     */
    public $bizOrderId;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $closeTime;

    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var string
     */
    public $outInsOrderId;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var int
     */
    public $price;

    /**
     * @var int
     */
    public $settleType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicant' => 'applicant',
        'bizOrderId' => 'biz_order_id',
        'bizType' => 'biz_type',
        'closeTime' => 'close_time',
        'insOrderId' => 'ins_order_id',
        'outInsOrderId' => 'out_ins_order_id',
        'payTime' => 'pay_time',
        'price' => 'price',
        'settleType' => 'settle_type',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->applicant) {
            $this->applicant->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = null !== $this->applicant ? $this->applicant->toArray($noStream) : $this->applicant;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
