<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainOrderChangeConfirmRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $changeApplyId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $changeSettleAmount;

    /**
     * @description This parameter is required.
     *
     * @example 1002145190081005400
     *
     * @var string
     */
    public $orderId;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $outChangeApplyId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'changeApplyId'      => 'change_apply_id',
        'changeSettleAmount' => 'change_settle_amount',
        'orderId'            => 'order_id',
        'outChangeApplyId'   => 'out_change_apply_id',
        'outOrderId'         => 'out_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TrainOrderChangeConfirmRequest
     */
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
