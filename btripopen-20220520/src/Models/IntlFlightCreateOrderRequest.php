<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\passengerList;
use AlibabaCloud\Tea\Model;

class IntlFlightCreateOrderRequest extends Model
{
    /**
     * @example fcoid_deb6372db8194f1c94c23bc4fadc508d
     *
     * @var string
     */
    public $asyncCreateOrderKey;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $asyncCreateOrderMode;

    /**
     * @var contactInfo
     */
    public $contactInfo;

    /**
     * @var costCenter
     */
    public $costCenter;

    /**
     * @var string[]
     */
    public $extraInfo;

    /**
     * @example open12k0lclldfdc7v10E2HaRrOr00
     *
     * @var string
     */
    public $isvName;

    /**
     * @example chinese
     *
     * @var string
     */
    public $language;

    /**
     * @example 56319a175bdf4b1898190bd7edb603b5_0
     *
     * @var string
     */
    public $otaItemId;

    /**
     * @example F11380075736888770560
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @example fcoid_deb6372db8194f1c94c23bc4fadc508d
     *
     * @var string
     */
    public $renderKey;

    /**
     * @example 120000
     *
     * @var int
     */
    public $totalPriceCent;

    /**
     * @example 12341234
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'asyncCreateOrderKey'  => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'contactInfo'          => 'contact_info',
        'costCenter'           => 'cost_center',
        'extraInfo'            => 'extra_info',
        'isvName'              => 'isv_name',
        'language'             => 'language',
        'otaItemId'            => 'ota_item_id',
        'outOrderId'           => 'out_order_id',
        'passengerList'        => 'passenger_list',
        'renderKey'            => 'render_key',
        'totalPriceCent'       => 'total_price_cent',
        'userId'               => 'user_id',
        'userName'             => 'user_name',
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
        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toMap() : null;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toMap() : null;
        }
        if (null !== $this->extraInfo) {
            $res['extra_info'] = $this->extraInfo;
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
        if (null !== $this->passengerList) {
            $res['passenger_list'] = [];
            if (null !== $this->passengerList && \is_array($this->passengerList)) {
                $n = 0;
                foreach ($this->passengerList as $item) {
                    $res['passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return IntlFlightCreateOrderRequest
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
        if (isset($map['contact_info'])) {
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
        }
        if (isset($map['cost_center'])) {
            $model->costCenter = costCenter::fromMap($map['cost_center']);
        }
        if (isset($map['extra_info'])) {
            $model->extraInfo = $map['extra_info'];
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
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n                    = 0;
                foreach ($map['passenger_list'] as $item) {
                    $model->passengerList[$n++] = null !== $item ? passengerList::fromMap($item) : $item;
                }
            }
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
