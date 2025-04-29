<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainApplyChangeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptNoSeat;

    /**
     * @var string
     */
    public $changeTrainInfoSShrink;

    /**
     * @var string
     */
    public $forceMatch;

    /**
     * @var bool
     */
    public $isPayNow;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outChangeApplyId;

    /**
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'acceptNoSeat' => 'accept_no_seat',
        'changeTrainInfoSShrink' => 'change_train_info_s',
        'forceMatch' => 'force_match',
        'isPayNow' => 'is_pay_now',
        'orderId' => 'order_id',
        'outChangeApplyId' => 'out_change_apply_id',
        'outOrderId' => 'out_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptNoSeat) {
            $res['accept_no_seat'] = $this->acceptNoSeat;
        }

        if (null !== $this->changeTrainInfoSShrink) {
            $res['change_train_info_s'] = $this->changeTrainInfoSShrink;
        }

        if (null !== $this->forceMatch) {
            $res['force_match'] = $this->forceMatch;
        }

        if (null !== $this->isPayNow) {
            $res['is_pay_now'] = $this->isPayNow;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outChangeApplyId) {
            $res['out_change_apply_id'] = $this->outChangeApplyId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
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
        if (isset($map['accept_no_seat'])) {
            $model->acceptNoSeat = $map['accept_no_seat'];
        }

        if (isset($map['change_train_info_s'])) {
            $model->changeTrainInfoSShrink = $map['change_train_info_s'];
        }

        if (isset($map['force_match'])) {
            $model->forceMatch = $map['force_match'];
        }

        if (isset($map['is_pay_now'])) {
            $model->isPayNow = $map['is_pay_now'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_change_apply_id'])) {
            $model->outChangeApplyId = $map['out_change_apply_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        return $model;
    }
}
