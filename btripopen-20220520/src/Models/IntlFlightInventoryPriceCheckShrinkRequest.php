<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IntlFlightInventoryPriceCheckShrinkRequest extends Model
{
    /**
     * @example ZJTD
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
     * @example 102000
     *
     * @var int
     */
    public $orderPrice;

    /**
     * @description This parameter is required.
     *
     * @example 22111acaf9ea47c09ed0db6abc45be2d_0
     *
     * @var string
     */
    public $otaItemId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $passengerListShrink;

    /**
     * @example 12412341234
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'isvName'             => 'isv_name',
        'language'            => 'language',
        'orderPrice'          => 'order_price',
        'otaItemId'           => 'ota_item_id',
        'passengerListShrink' => 'passenger_list',
        'userId'              => 'user_id',
        'userName'            => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->orderPrice) {
            $res['order_price'] = $this->orderPrice;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }
        if (null !== $this->passengerListShrink) {
            $res['passenger_list'] = $this->passengerListShrink;
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
     * @return IntlFlightInventoryPriceCheckShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['order_price'])) {
            $model->orderPrice = $map['order_price'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }
        if (isset($map['passenger_list'])) {
            $model->passengerListShrink = $map['passenger_list'];
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
