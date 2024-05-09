<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainOrderCancelRequest extends Model
{
    /**
     * @example 1234223
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @example 1002145190081005400
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 123321245534
     *
     * @var string
     */
    public $outChangeOrderId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'changeOrderId'    => 'change_order_id',
        'orderId'          => 'order_id',
        'outChangeOrderId' => 'out_change_order_id',
        'outOrderId'       => 'out_order_id',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainOrderCancelRequest
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

        return $model;
    }
}
