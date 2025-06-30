<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Request\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Request\travelers;

class FlightCreateOrderV2Request extends Model
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
     * @var travelers[]
     */
    public $travelers;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'asyncCreateOrderMode' => 'async_create_order_mode',
        'btripUserId' => 'btrip_user_id',
        'buyerName' => 'buyer_name',
        'contactInfo' => 'contact_info',
        'isvName' => 'isv_name',
        'otaItemId' => 'ota_item_id',
        'outOrderId' => 'out_order_id',
        'totalPriceCent' => 'total_price_cent',
        'travelers' => 'travelers',
    ];

    public function validate()
    {
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (\is_array($this->travelers)) {
            Model::validateArray($this->travelers);
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

        if (null !== $this->travelers) {
            if (\is_array($this->travelers)) {
                $res['travelers'] = [];
                $n1 = 0;
                foreach ($this->travelers as $item1) {
                    $res['travelers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['travelers'])) {
                $model->travelers = [];
                $n1 = 0;
                foreach ($map['travelers'] as $item1) {
                    $model->travelers[$n1] = travelers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
