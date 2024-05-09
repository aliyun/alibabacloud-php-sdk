<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1017002195798359369
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1233333
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 9
     *
     * @var string
     */
    public $payStatus;

    /**
     * @example 5
     *
     * @var int
     */
    public $serviceFee;
    protected $_name = [
        'orderId'    => 'order_id',
        'outOrderId' => 'out_order_id',
        'payStatus'  => 'pay_status',
        'serviceFee' => 'service_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
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
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }

        return $model;
    }
}
