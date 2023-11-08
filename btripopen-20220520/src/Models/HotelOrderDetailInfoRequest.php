<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderDetailInfoRequest extends Model
{
    /**
     * @var string
     */
    public $btripOrderId;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;
    protected $_name = [
        'btripOrderId' => 'btrip_order_id',
        'disOrderId'   => 'dis_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelOrderDetailInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        return $model;
    }
}
