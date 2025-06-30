<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IntlFlightCreateOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $asyncCreateOrderKey;

    /**
     * @var bool
     */
    public $asyncCreateOrderMode;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @var string
     */
    public $contactInfoShrink;

    /**
     * @var string
     */
    public $extraInfoShrink;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var int
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $otaItemId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $passengerListShrink;

    /**
     * @var string
     */
    public $renderKey;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'contactInfoShrink' => 'contact_info',
        'extraInfoShrink' => 'extra_info',
        'isvName' => 'isv_name',
        'orderPrice' => 'order_price',
        'otaItemId' => 'ota_item_id',
        'outOrderId' => 'out_order_id',
        'passengerListShrink' => 'passenger_list',
        'renderKey' => 'render_key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncCreateOrderKey) {
            $res['async_create_order_key'] = $this->asyncCreateOrderKey;
        }

        if (null !== $this->asyncCreateOrderMode) {
            $res['async_create_order_mode'] = $this->asyncCreateOrderMode;
        }

        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }

        if (null !== $this->contactInfoShrink) {
            $res['contact_info'] = $this->contactInfoShrink;
        }

        if (null !== $this->extraInfoShrink) {
            $res['extra_info'] = $this->extraInfoShrink;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->orderPrice) {
            $res['order_price'] = $this->orderPrice;
        }

        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->passengerListShrink) {
            $res['passenger_list'] = $this->passengerListShrink;
        }

        if (null !== $this->renderKey) {
            $res['render_key'] = $this->renderKey;
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
        if (isset($map['async_create_order_key'])) {
            $model->asyncCreateOrderKey = $map['async_create_order_key'];
        }

        if (isset($map['async_create_order_mode'])) {
            $model->asyncCreateOrderMode = $map['async_create_order_mode'];
        }

        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }

        if (isset($map['contact_info'])) {
            $model->contactInfoShrink = $map['contact_info'];
        }

        if (isset($map['extra_info'])) {
            $model->extraInfoShrink = $map['extra_info'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['order_price'])) {
            $model->orderPrice = $map['order_price'];
        }

        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['passenger_list'])) {
            $model->passengerListShrink = $map['passenger_list'];
        }

        if (isset($map['render_key'])) {
            $model->renderKey = $map['render_key'];
        }

        return $model;
    }
}
