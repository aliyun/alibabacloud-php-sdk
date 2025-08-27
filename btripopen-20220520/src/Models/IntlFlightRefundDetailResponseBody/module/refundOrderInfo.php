<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class refundOrderInfo extends Model
{
    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var int
     */
    public $handingAmount;

    /**
     * @var string
     */
    public $outRefundApplyId;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonDesc;

    /**
     * @var int
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $refundApplyId;

    /**
     * @var int
     */
    public $relationRefundApplyId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $successTime;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'applyTime' => 'apply_time',
        'closeReason' => 'close_reason',
        'handingAmount' => 'handing_amount',
        'outRefundApplyId' => 'out_refund_apply_id',
        'reasonCode' => 'reason_code',
        'reasonDesc' => 'reason_desc',
        'refundAmount' => 'refund_amount',
        'refundApplyId' => 'refund_apply_id',
        'relationRefundApplyId' => 'relation_refund_apply_id',
        'status' => 'status',
        'successTime' => 'success_time',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['apply_time'] = $this->applyTime;
        }

        if (null !== $this->closeReason) {
            $res['close_reason'] = $this->closeReason;
        }

        if (null !== $this->handingAmount) {
            $res['handing_amount'] = $this->handingAmount;
        }

        if (null !== $this->outRefundApplyId) {
            $res['out_refund_apply_id'] = $this->outRefundApplyId;
        }

        if (null !== $this->reasonCode) {
            $res['reason_code'] = $this->reasonCode;
        }

        if (null !== $this->reasonDesc) {
            $res['reason_desc'] = $this->reasonDesc;
        }

        if (null !== $this->refundAmount) {
            $res['refund_amount'] = $this->refundAmount;
        }

        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
        }

        if (null !== $this->relationRefundApplyId) {
            $res['relation_refund_apply_id'] = $this->relationRefundApplyId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->successTime) {
            $res['success_time'] = $this->successTime;
        }

        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
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
        if (isset($map['apply_time'])) {
            $model->applyTime = $map['apply_time'];
        }

        if (isset($map['close_reason'])) {
            $model->closeReason = $map['close_reason'];
        }

        if (isset($map['handing_amount'])) {
            $model->handingAmount = $map['handing_amount'];
        }

        if (isset($map['out_refund_apply_id'])) {
            $model->outRefundApplyId = $map['out_refund_apply_id'];
        }

        if (isset($map['reason_code'])) {
            $model->reasonCode = $map['reason_code'];
        }

        if (isset($map['reason_desc'])) {
            $model->reasonDesc = $map['reason_desc'];
        }

        if (isset($map['refund_amount'])) {
            $model->refundAmount = $map['refund_amount'];
        }

        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }

        if (isset($map['relation_refund_apply_id'])) {
            $model->relationRefundApplyId = $map['relation_refund_apply_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success_time'])) {
            $model->successTime = $map['success_time'];
        }

        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
