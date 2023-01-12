<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model\addressInfoList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model\deliveryInfoList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model\invoiceInfo;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model\lmItemInfoList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var addressInfoList[]
     */
    public $addressInfoList;

    /**
     * @example 1000
     *
     * @var int
     */
    public $buyerCurrentPoints;

    /**
     * @var deliveryInfoList[]
     */
    public $deliveryInfoList;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @var lmItemInfoList[]
     */
    public $lmItemInfoList;
    protected $_name = [
        'addressInfoList'    => 'AddressInfoList',
        'buyerCurrentPoints' => 'BuyerCurrentPoints',
        'deliveryInfoList'   => 'DeliveryInfoList',
        'extInfo'            => 'ExtInfo',
        'invoiceInfo'        => 'InvoiceInfo',
        'lmItemInfoList'     => 'LmItemInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressInfoList) {
            $res['AddressInfoList'] = [];
            if (null !== $this->addressInfoList && \is_array($this->addressInfoList)) {
                $n = 0;
                foreach ($this->addressInfoList as $item) {
                    $res['AddressInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->buyerCurrentPoints) {
            $res['BuyerCurrentPoints'] = $this->buyerCurrentPoints;
        }
        if (null !== $this->deliveryInfoList) {
            $res['DeliveryInfoList'] = [];
            if (null !== $this->deliveryInfoList && \is_array($this->deliveryInfoList)) {
                $n = 0;
                foreach ($this->deliveryInfoList as $item) {
                    $res['DeliveryInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->invoiceInfo) {
            $res['InvoiceInfo'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
        }
        if (null !== $this->lmItemInfoList) {
            $res['LmItemInfoList'] = [];
            if (null !== $this->lmItemInfoList && \is_array($this->lmItemInfoList)) {
                $n = 0;
                foreach ($this->lmItemInfoList as $item) {
                    $res['LmItemInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressInfoList'])) {
            if (!empty($map['AddressInfoList'])) {
                $model->addressInfoList = [];
                $n                      = 0;
                foreach ($map['AddressInfoList'] as $item) {
                    $model->addressInfoList[$n++] = null !== $item ? addressInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BuyerCurrentPoints'])) {
            $model->buyerCurrentPoints = $map['BuyerCurrentPoints'];
        }
        if (isset($map['DeliveryInfoList'])) {
            if (!empty($map['DeliveryInfoList'])) {
                $model->deliveryInfoList = [];
                $n                       = 0;
                foreach ($map['DeliveryInfoList'] as $item) {
                    $model->deliveryInfoList[$n++] = null !== $item ? deliveryInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['InvoiceInfo'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['InvoiceInfo']);
        }
        if (isset($map['LmItemInfoList'])) {
            if (!empty($map['LmItemInfoList'])) {
                $model->lmItemInfoList = [];
                $n                     = 0;
                foreach ($map['LmItemInfoList'] as $item) {
                    $model->lmItemInfoList[$n++] = null !== $item ? lmItemInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
