<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IntlFlightOrderCancelRequest extends Model
{
    /**
     * @example TRAVEL
     *
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $memo;

    /**
     * @example 1012000000000000
     *
     * @var string
     */
    public $orderId;

    /**
     * @example F11374007131319304192
     *
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'isvName'    => 'isv_name',
        'memo'       => 'memo',
        'orderId'    => 'order_id',
        'outOrderId' => 'out_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntlFlightOrderCancelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        return $model;
    }
}
