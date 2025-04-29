<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeRequest\changeTrainDetails;

class TrainFeeCalculateChangeRequest extends Model
{
    /**
     * @var changeTrainDetails[]
     */
    public $changeTrainDetails;

    /**
     * @var string
     */
    public $distributeOrderId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'changeTrainDetails' => 'change_train_details',
        'distributeOrderId' => 'distribute_order_id',
        'orderId' => 'order_id',
    ];

    public function validate()
    {
        if (\is_array($this->changeTrainDetails)) {
            Model::validateArray($this->changeTrainDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeTrainDetails) {
            if (\is_array($this->changeTrainDetails)) {
                $res['change_train_details'] = [];
                $n1 = 0;
                foreach ($this->changeTrainDetails as $item1) {
                    $res['change_train_details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_train_details'])) {
            if (!empty($map['change_train_details'])) {
                $model->changeTrainDetails = [];
                $n1 = 0;
                foreach ($map['change_train_details'] as $item1) {
                    $model->changeTrainDetails[$n1++] = changeTrainDetails::fromMap($item1);
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
