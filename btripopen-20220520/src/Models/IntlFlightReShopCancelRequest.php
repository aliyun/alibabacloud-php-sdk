<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightReShopCancelRequest extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outReShopApplyId;

    /**
     * @var string
     */
    public $reShopApplyId;
    protected $_name = [
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outReShopApplyId' => 'out_re_shop_apply_id',
        'reShopApplyId' => 're_shop_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outReShopApplyId) {
            $res['out_re_shop_apply_id'] = $this->outReShopApplyId;
        }

        if (null !== $this->reShopApplyId) {
            $res['re_shop_apply_id'] = $this->reShopApplyId;
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
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_re_shop_apply_id'])) {
            $model->outReShopApplyId = $map['out_re_shop_apply_id'];
        }

        if (isset($map['re_shop_apply_id'])) {
            $model->reShopApplyId = $map['re_shop_apply_id'];
        }

        return $model;
    }
}
