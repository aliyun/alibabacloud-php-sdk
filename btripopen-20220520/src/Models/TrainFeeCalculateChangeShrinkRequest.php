<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainFeeCalculateChangeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $changeTrainDetailsShrink;

    /**
     * @var string
     */
    public $distributeOrderId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'changeTrainDetailsShrink' => 'change_train_details',
        'distributeOrderId' => 'distribute_order_id',
        'orderId' => 'order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeTrainDetailsShrink) {
            $res['change_train_details'] = $this->changeTrainDetailsShrink;
        }

        if (null !== $this->distributeOrderId) {
            $res['distribute_order_id'] = $this->distributeOrderId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
        if (isset($map['change_train_details'])) {
            $model->changeTrainDetailsShrink = $map['change_train_details'];
        }

        if (isset($map['distribute_order_id'])) {
            $model->distributeOrderId = $map['distribute_order_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}
