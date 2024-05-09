<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCancelResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 11127278782
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @example 116019444
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 43534345
     *
     * @var string
     */
    public $outChangeOrderId;

    /**
     * @example 3702553342926024704
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'changeOrderId'    => 'change_order_id',
        'orderId'          => 'order_id',
        'outChangeOrderId' => 'out_change_order_id',
        'outOrderId'       => 'out_order_id',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
