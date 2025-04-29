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
    public $contactInfoShrink;

    /**
     * @var string
     */
    public $costCenterShrink;

    /**
     * @var string
     */
    public $extraInfoShrink;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $language;

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

    /**
     * @var int
     */
    public $totalPriceCent;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'contactInfoShrink' => 'contact_info',
        'costCenterShrink' => 'cost_center',
        'extraInfoShrink' => 'extra_info',
        'isvName' => 'isv_name',
        'language' => 'language',
        'otaItemId' => 'ota_item_id',
        'outOrderId' => 'out_order_id',
        'passengerListShrink' => 'passenger_list',
        'renderKey' => 'render_key',
        'totalPriceCent' => 'total_price_cent',
        'userId' => 'user_id',
        'userName' => 'user_name',
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

        if (null !== $this->contactInfoShrink) {
            $res['contact_info'] = $this->contactInfoShrink;
        }

        if (null !== $this->costCenterShrink) {
            $res['cost_center'] = $this->costCenterShrink;
        }

        if (null !== $this->extraInfoShrink) {
            $res['extra_info'] = $this->extraInfoShrink;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
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

        if (null !== $this->totalPriceCent) {
            $res['total_price_cent'] = $this->totalPriceCent;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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

        if (isset($map['contact_info'])) {
            $model->contactInfoShrink = $map['contact_info'];
        }

        if (isset($map['cost_center'])) {
            $model->costCenterShrink = $map['cost_center'];
        }

        if (isset($map['extra_info'])) {
            $model->extraInfoShrink = $map['extra_info'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
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

        if (isset($map['total_price_cent'])) {
            $model->totalPriceCent = $map['total_price_cent'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
