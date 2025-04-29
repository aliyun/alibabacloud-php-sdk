<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightModifyPayV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $extParamsShrink;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var int
     */
    public $modifyPayAmount;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var int
     */
    public $subOrderId;
    protected $_name = [
        'extParamsShrink' => 'ext_params',
        'isvName' => 'isv_name',
        'modifyPayAmount' => 'modify_pay_amount',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outSubOrderId' => 'out_sub_order_id',
        'subOrderId' => 'sub_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extParamsShrink) {
            $res['ext_params'] = $this->extParamsShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ext_params'])) {
            $model->extParamsShrink = $map['ext_params'];
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
