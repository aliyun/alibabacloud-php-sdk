<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightOrderPayRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extParams;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'extParams' => 'ext_params',
        'isvName' => 'isv_name',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'totalPrice' => 'total_price',
    ];

    public function validate()
    {
        if (\is_array($this->extParams)) {
            Model::validateArray($this->extParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extParams) {
            if (\is_array($this->extParams)) {
                $res['ext_params'] = [];
                foreach ($this->extParams as $key1 => $value1) {
                    $res['ext_params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
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
            if (!empty($map['ext_params'])) {
                $model->extParams = [];
                foreach ($map['ext_params'] as $key1 => $value1) {
                    $model->extParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
