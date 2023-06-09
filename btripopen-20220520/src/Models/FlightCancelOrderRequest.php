<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightCancelOrderRequest extends Model
{
    /**
     * @var string
     */
    public $disOrderId;
    protected $_name = [
        'disOrderId' => 'dis_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightCancelOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        return $model;
    }
}
