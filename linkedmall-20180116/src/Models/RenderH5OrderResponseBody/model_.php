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
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var int
     */
    public $buyerCurrentPoints;

    /**
     * @var lmItemInfoList[]
     */
    public $lmItemInfoList;

    /**
     * @var deliveryInfoList[]
     */
    public $deliveryInfoList;

    /**
     * @var addressInfoList[]
     */
    public $addressInfoList;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;
    protected $_name = [
        'extInfo'            => 'ExtInfo',
        'buyerCurrentPoints' => 'BuyerCurrentPoints',
        'lmItemInfoList'     => 'LmItemInfoList',
        'deliveryInfoList'   => 'DeliveryInfoList',
        'addressInfoList'    => 'AddressInfoList',
        'invoiceInfo'        => 'InvoiceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->buyerCurrentPoints) {
            $res['BuyerCurrentPoints'] = $this->buyerCurrentPoints;
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
        if (null !== $this->deliveryInfoList) {
            $res['DeliveryInfoList'] = [];
            if (null !== $this->deliveryInfoList && \is_array($this->deliveryInfoList)) {
                $n = 0;
                foreach ($this->deliveryInfoList as $item) {
                    $res['DeliveryInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addressInfoList) {
            $res['AddressInfoList'] = [];
            if (null !== $this->addressInfoList && \is_array($this->addressInfoList)) {
                $n = 0;
                foreach ($this->addressInfoList as $item) {
                    $res['AddressInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceInfo) {
            $res['InvoiceInfo'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
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
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['BuyerCurrentPoints'])) {
            $model->buyerCurrentPoints = $map['BuyerCurrentPoints'];
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
        if (isset($map['DeliveryInfoList'])) {
            if (!empty($map['DeliveryInfoList'])) {
                $model->deliveryInfoList = [];
                $n                       = 0;
                foreach ($map['DeliveryInfoList'] as $item) {
                    $model->deliveryInfoList[$n++] = null !== $item ? deliveryInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AddressInfoList'])) {
            if (!empty($map['AddressInfoList'])) {
                $model->addressInfoList = [];
                $n                      = 0;
                foreach ($map['AddressInfoList'] as $item) {
                    $model->addressInfoList[$n++] = null !== $item ? addressInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvoiceInfo'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['InvoiceInfo']);
        }

        return $model;
    }
}
