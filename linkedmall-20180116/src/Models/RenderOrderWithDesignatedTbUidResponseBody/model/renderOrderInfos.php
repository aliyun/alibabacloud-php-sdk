<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\renderOrderInfos\deliveryInfos;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\renderOrderInfos\invoiceInfo;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\renderOrderInfos\lmItemInfos;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\renderOrderInfos\shopPromInstVOS;
use AlibabaCloud\Tea\Model;

class renderOrderInfos extends Model
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
     * @var lmItemInfos[]
     */
    public $lmItemInfos;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var shopPromInstVOS[]
     */
    public $shopPromInstVOS;

    /**
     * @var string
     */
    public $tbShopName;
    protected $_name = [
        'canSell'         => 'CanSell',
        'deliveryInfos'   => 'DeliveryInfos',
        'extInfo'         => 'ExtInfo',
        'invoiceInfo'     => 'InvoiceInfo',
        'lmItemInfos'     => 'LmItemInfos',
        'message'         => 'Message',
        'sellerId'        => 'SellerId',
        'shopPromInstVOS' => 'ShopPromInstVOS',
        'tbShopName'      => 'TbShopName',
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
        if (null !== $this->lmItemInfos) {
            $res['LmItemInfos'] = [];
            if (null !== $this->lmItemInfos && \is_array($this->lmItemInfos)) {
                $n = 0;
                foreach ($this->lmItemInfos as $item) {
                    $res['LmItemInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
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
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderOrderInfos
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
        if (isset($map['LmItemInfos'])) {
            if (!empty($map['LmItemInfos'])) {
                $model->lmItemInfos = [];
                $n                  = 0;
                foreach ($map['LmItemInfos'] as $item) {
                    $model->lmItemInfos[$n++] = null !== $item ? lmItemInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
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
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }

        return $model;
    }
}
