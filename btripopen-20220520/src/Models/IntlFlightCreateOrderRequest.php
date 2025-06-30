<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\passengerList;

class IntlFlightCreateOrderRequest extends Model
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
     * @var contactInfo
     */
    public $contactInfo;

    /**
     * @var string[]
     */
    public $extraInfo;

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
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var string
     */
    public $renderKey;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'contactInfo' => 'contact_info',
        'extraInfo' => 'extra_info',
        'isvName' => 'isv_name',
        'orderPrice' => 'order_price',
        'otaItemId' => 'ota_item_id',
        'outOrderId' => 'out_order_id',
        'passengerList' => 'passenger_list',
        'renderKey' => 'render_key',
    ];

    public function validate()
    {
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
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

        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toArray($noStream) : $this->contactInfo;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['extra_info'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['extra_info'][$key1] = $value1;
                }
            }
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

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
        }

        if (isset($map['extra_info'])) {
            if (!empty($map['extra_info'])) {
                $model->extraInfo = [];
                foreach ($map['extra_info'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
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
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['render_key'])) {
            $model->renderKey = $map['render_key'];
        }

        return $model;
    }
}
