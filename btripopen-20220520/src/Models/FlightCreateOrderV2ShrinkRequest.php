<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightCreateOrderV2ShrinkRequest extends Model
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
    public $isvName;

    /**
     * @var string
     */
    public $otaItemId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $totalPriceCent;

    /**
     * @var string
     */
    public $travelersShrink;
    protected $_name = [
        'asyncCreateOrderKey'  => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'btripUserId'          => 'btrip_user_id',
        'buyerName'            => 'buyer_name',
        'contactInfoShrink'    => 'contact_info',
        'isvName'              => 'isv_name',
        'otaItemId'            => 'ota_item_id',
        'outOrderId'           => 'out_order_id',
        'totalPriceCent'       => 'total_price_cent',
        'travelersShrink'      => 'travelers',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->totalPriceCent) {
            $res['total_price_cent'] = $this->totalPriceCent;
        }
        if (null !== $this->travelersShrink) {
            $res['travelers'] = $this->travelersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightCreateOrderV2ShrinkRequest
     */
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
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['total_price_cent'])) {
            $model->totalPriceCent = $map['total_price_cent'];
        }
        if (isset($map['travelers'])) {
            $model->travelersShrink = $map['travelers'];
        }

        return $model;
    }
}
