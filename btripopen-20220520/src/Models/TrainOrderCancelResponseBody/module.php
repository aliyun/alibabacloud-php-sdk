<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCancelResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outChangeOrderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'changeOrderId' => 'change_order_id',
        'orderId' => 'order_id',
        'outChangeOrderId' => 'out_change_order_id',
        'outOrderId' => 'out_order_id',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outChangeOrderId) {
            $res['out_change_order_id'] = $this->outChangeOrderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
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
        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_change_order_id'])) {
            $model->outChangeOrderId = $map['out_change_order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
