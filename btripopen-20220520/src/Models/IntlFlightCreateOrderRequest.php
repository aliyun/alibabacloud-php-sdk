<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest\costCenter;
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
     * @var passengerList[]
     */
    public $passengerList;

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
        'contactInfo' => 'contact_info',
        'costCenter' => 'cost_center',
        'extraInfo' => 'extra_info',
        'isvName' => 'isv_name',
        'language' => 'language',
        'otaItemId' => 'ota_item_id',
        'outOrderId' => 'out_order_id',
        'passengerList' => 'passenger_list',
        'renderKey' => 'render_key',
        'totalPriceCent' => 'total_price_cent',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (null !== $this->costCenter) {
            $this->costCenter->validate();
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

        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toArray($noStream) : $this->contactInfo;
        }

        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toArray($noStream) : $this->costCenter;
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
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
        }

        if (isset($map['cost_center'])) {
            $model->costCenter = costCenter::fromMap($map['cost_center']);
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
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1++] = passengerList::fromMap($item1);
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
