<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainFeeCalculateChangeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $changeTrainDetailsShrink;

    /**
     * @example 12345
     *
     * @var string
     */
    public $distributeOrderId;

    /**
     * @example 2627694109810885616
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'changeTrainDetailsShrink' => 'change_train_details',
        'distributeOrderId'        => 'distribute_order_id',
        'orderId'                  => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TrainFeeCalculateChangeShrinkRequest
     */
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
