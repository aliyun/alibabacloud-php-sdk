<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeRequest\changeTrainDetails;
use AlibabaCloud\Tea\Model;

class TrainFeeCalculateChangeRequest extends Model
{
    /**
     * @var changeTrainDetails[]
     */
    public $changeTrainDetails;

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
        'changeTrainDetails' => 'change_train_details',
        'distributeOrderId'  => 'distribute_order_id',
        'orderId'            => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeTrainDetails) {
            $res['change_train_details'] = [];
            if (null !== $this->changeTrainDetails && \is_array($this->changeTrainDetails)) {
                $n = 0;
                foreach ($this->changeTrainDetails as $item) {
                    $res['change_train_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return TrainFeeCalculateChangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_train_details'])) {
            if (!empty($map['change_train_details'])) {
                $model->changeTrainDetails = [];
                $n                         = 0;
                foreach ($map['change_train_details'] as $item) {
                    $model->changeTrainDetails[$n++] = null !== $item ? changeTrainDetails::fromMap($item) : $item;
                }
            }
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
