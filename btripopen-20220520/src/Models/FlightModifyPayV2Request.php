<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightModifyPayV2Request extends Model
{
    /**
     * @var mixed[]
     */
    public $extParams;

    /**
     * @example name
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 5100
     *
     * @var int
     */
    public $modifyPayAmount;

    /**
     * @example 1017002195370467200
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1017002195370467200
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1019195786853020
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @example 1019195786853020
     *
     * @var int
     */
    public $subOrderId;
    protected $_name = [
        'extParams'       => 'ext_params',
        'isvName'         => 'isv_name',
        'modifyPayAmount' => 'modify_pay_amount',
        'orderId'         => 'order_id',
        'outOrderId'      => 'out_order_id',
        'outSubOrderId'   => 'out_sub_order_id',
        'subOrderId'      => 'sub_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extParams) {
            $res['ext_params'] = $this->extParams;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->modifyPayAmount) {
            $res['modify_pay_amount'] = $this->modifyPayAmount;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
        }
        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightModifyPayV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ext_params'])) {
            $model->extParams = $map['ext_params'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['modify_pay_amount'])) {
            $model->modifyPayAmount = $map['modify_pay_amount'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }
        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }

        return $model;
    }
}
