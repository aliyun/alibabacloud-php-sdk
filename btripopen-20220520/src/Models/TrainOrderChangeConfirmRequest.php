<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainOrderChangeConfirmRequest extends Model
{
    /**
     * @var string
     */
    public $changeApplyId;

    /**
     * @var int
     */
    public $changeSettleAmount;

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
        'changeApplyId' => 'change_apply_id',
        'changeSettleAmount' => 'change_settle_amount',
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
        if (null !== $this->changeApplyId) {
            $res['change_apply_id'] = $this->changeApplyId;
        }

        if (null !== $this->changeSettleAmount) {
            $res['change_settle_amount'] = $this->changeSettleAmount;
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
        if (isset($map['change_apply_id'])) {
            $model->changeApplyId = $map['change_apply_id'];
        }

        if (isset($map['change_settle_amount'])) {
            $model->changeSettleAmount = $map['change_settle_amount'];
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
