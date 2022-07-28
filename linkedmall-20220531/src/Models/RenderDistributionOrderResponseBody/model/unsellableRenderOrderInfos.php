<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos\deliveryInfos;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos\invoiceInfo;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos\itemInfos;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos\shopPromInstVOS;
use AlibabaCloud\Tea\Model;

class unsellableRenderOrderInfos extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var deliveryInfos[]
     */
    public $deliveryInfos;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @var itemInfos[]
     */
    public $itemInfos;

    /**
     * @var string
     */
    public $message;

    /**
     * @var shopPromInstVOS[]
     */
    public $shopPromInstVOS;
    protected $_name = [
        'canSell'         => 'CanSell',
        'deliveryInfos'   => 'DeliveryInfos',
        'extInfo'         => 'ExtInfo',
        'invoiceInfo'     => 'InvoiceInfo',
        'itemInfos'       => 'ItemInfos',
        'message'         => 'Message',
        'shopPromInstVOS' => 'ShopPromInstVOS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->deliveryInfos) {
            $res['DeliveryInfos'] = [];
            if (null !== $this->deliveryInfos && \is_array($this->deliveryInfos)) {
                $n = 0;
                foreach ($this->deliveryInfos as $item) {
                    $res['DeliveryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->invoiceInfo) {
            $res['InvoiceInfo'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
        }
        if (null !== $this->itemInfos) {
            $res['ItemInfos'] = [];
            if (null !== $this->itemInfos && \is_array($this->itemInfos)) {
                $n = 0;
                foreach ($this->itemInfos as $item) {
                    $res['ItemInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->shopPromInstVOS) {
            $res['ShopPromInstVOS'] = [];
            if (null !== $this->shopPromInstVOS && \is_array($this->shopPromInstVOS)) {
                $n = 0;
                foreach ($this->shopPromInstVOS as $item) {
                    $res['ShopPromInstVOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unsellableRenderOrderInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['DeliveryInfos'])) {
            if (!empty($map['DeliveryInfos'])) {
                $model->deliveryInfos = [];
                $n                    = 0;
                foreach ($map['DeliveryInfos'] as $item) {
                    $model->deliveryInfos[$n++] = null !== $item ? deliveryInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['InvoiceInfo'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['InvoiceInfo']);
        }
        if (isset($map['ItemInfos'])) {
            if (!empty($map['ItemInfos'])) {
                $model->itemInfos = [];
                $n                = 0;
                foreach ($map['ItemInfos'] as $item) {
                    $model->itemInfos[$n++] = null !== $item ? itemInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ShopPromInstVOS'])) {
            if (!empty($map['ShopPromInstVOS'])) {
                $model->shopPromInstVOS = [];
                $n                      = 0;
                foreach ($map['ShopPromInstVOS'] as $item) {
                    $model->shopPromInstVOS[$n++] = null !== $item ? shopPromInstVOS::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
