<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelOrderChangeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $saleOrderId;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'changeOrderId' => 'change_order_id',
        'disOrderId' => 'dis_order_id',
        'saleOrderId' => 'sale_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
        }

        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->saleOrderId) {
            $res['sale_order_id'] = $this->saleOrderId;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }

        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['sale_order_id'])) {
            $model->saleOrderId = $map['sale_order_id'];
        }

        return $model;
    }
}
