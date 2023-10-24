<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\subOrderRefundList\insured;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\subOrderRefundList\insureSegment;
use AlibabaCloud\Tea\Model;

class subOrderRefundList extends Model
{
    /**
     * @example 2023-04-17T20:25Z
     *
     * @var string
     */
    public $effectiveEndTime;

    /**
     * @example 2023-04-17T20:25Z
     *
     * @var string
     */
    public $effectiveStartTime;

    /**
     * @var insureSegment
     */
    public $insureSegment;

    /**
     * @example 2023-04-17T20:07Z
     *
     * @var string
     */
    public $insureTime;

    /**
     * @var insured
     */
    public $insured;

    /**
     * @example OUT123333444
     *
     * @var string
     */
    public $outSubInsOrderId;

    /**
     * @example T230411000000140183629
     *
     * @var string
     */
    public $policyNo;

    /**
     * @example 1024194640018002
     *
     * @var string
     */
    public $policyRefundNo;

    /**
     * @example 73000
     *
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example 008801.accident.flight.104000
     *
     * @var string
     */
    public $productNo;

    /**
     * @example REFUND_SUCCESS
     *
     * @var string
     */
    public $refundStatus;

    /**
     * @example 2023-04-17T20:25Z
     *
     * @var string
     */
    public $refundTime;

    /**
     * @example REFUND_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example s1231231344
     *
     * @var string
     */
    public $subInsOrderId;
    protected $_name = [
        'effectiveEndTime'   => 'effective_end_time',
        'effectiveStartTime' => 'effective_start_time',
        'insureSegment'      => 'insure_segment',
        'insureTime'         => 'insure_time',
        'insured'            => 'insured',
        'outSubInsOrderId'   => 'out_sub_ins_order_id',
        'policyNo'           => 'policy_no',
        'policyRefundNo'     => 'policy_refund_no',
        'price'              => 'price',
        'productName'        => 'product_name',
        'productNo'          => 'product_no',
        'refundStatus'       => 'refund_status',
        'refundTime'         => 'refund_time',
        'status'             => 'status',
        'subInsOrderId'      => 'sub_ins_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveEndTime) {
            $res['effective_end_time'] = $this->effectiveEndTime;
        }
        if (null !== $this->effectiveStartTime) {
            $res['effective_start_time'] = $this->effectiveStartTime;
        }
        if (null !== $this->insureSegment) {
            $res['insure_segment'] = null !== $this->insureSegment ? $this->insureSegment->toMap() : null;
        }
        if (null !== $this->insureTime) {
            $res['insure_time'] = $this->insureTime;
        }
        if (null !== $this->insured) {
            $res['insured'] = null !== $this->insured ? $this->insured->toMap() : null;
        }
        if (null !== $this->outSubInsOrderId) {
            $res['out_sub_ins_order_id'] = $this->outSubInsOrderId;
        }
        if (null !== $this->policyNo) {
            $res['policy_no'] = $this->policyNo;
        }
        if (null !== $this->policyRefundNo) {
            $res['policy_refund_no'] = $this->policyRefundNo;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->productName) {
            $res['product_name'] = $this->productName;
        }
        if (null !== $this->productNo) {
            $res['product_no'] = $this->productNo;
        }
        if (null !== $this->refundStatus) {
            $res['refund_status'] = $this->refundStatus;
        }
        if (null !== $this->refundTime) {
            $res['refund_time'] = $this->refundTime;
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
     * @return subOrderRefundList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['effective_end_time'])) {
            $model->effectiveEndTime = $map['effective_end_time'];
        }
        if (isset($map['effective_start_time'])) {
            $model->effectiveStartTime = $map['effective_start_time'];
        }
        if (isset($map['insure_segment'])) {
            $model->insureSegment = insureSegment::fromMap($map['insure_segment']);
        }
        if (isset($map['insure_time'])) {
            $model->insureTime = $map['insure_time'];
        }
        if (isset($map['insured'])) {
            $model->insured = insured::fromMap($map['insured']);
        }
        if (isset($map['out_sub_ins_order_id'])) {
            $model->outSubInsOrderId = $map['out_sub_ins_order_id'];
        }
        if (isset($map['policy_no'])) {
            $model->policyNo = $map['policy_no'];
        }
        if (isset($map['policy_refund_no'])) {
            $model->policyRefundNo = $map['policy_refund_no'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['product_name'])) {
            $model->productName = $map['product_name'];
        }
        if (isset($map['product_no'])) {
            $model->productNo = $map['product_no'];
        }
        if (isset($map['refund_status'])) {
            $model->refundStatus = $map['refund_status'];
        }
        if (isset($map['refund_time'])) {
            $model->refundTime = $map['refund_time'];
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
