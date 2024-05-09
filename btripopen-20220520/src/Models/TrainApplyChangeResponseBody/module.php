<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1234
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
     * @example 1017124195788186048
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $payStatus;
    protected $_name = [
        'changeOrderId' => 'change_order_id',
        'orderId'       => 'order_id',
        'outOrderId'    => 'out_order_id',
        'payStatus'     => 'pay_status',
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
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
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
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        return $model;
    }
}
