<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderRequest\itemInfoLists;
use AlibabaCloud\Tea\Model;

class RenderDistributionOrderRequest extends Model
{
    /**
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $distributionSupplierId;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var itemInfoLists[]
     */
    public $itemInfoLists;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'buyerId'                => 'BuyerId',
        'deliveryAddress'        => 'DeliveryAddress',
        'distributionSupplierId' => 'DistributionSupplierId',
        'distributorId'          => 'DistributorId',
        'extInfo'                => 'ExtInfo',
        'itemInfoLists'          => 'ItemInfoLists',
        'tenantId'               => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->distributionSupplierId) {
            $res['DistributionSupplierId'] = $this->distributionSupplierId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->itemInfoLists) {
            $res['ItemInfoLists'] = [];
            if (null !== $this->itemInfoLists && \is_array($this->itemInfoLists)) {
                $n = 0;
                foreach ($this->itemInfoLists as $item) {
                    $res['ItemInfoLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenderDistributionOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['DistributionSupplierId'])) {
            $model->distributionSupplierId = $map['DistributionSupplierId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['ItemInfoLists'])) {
            if (!empty($map['ItemInfoLists'])) {
                $model->itemInfoLists = [];
                $n                    = 0;
                foreach ($map['ItemInfoLists'] as $item) {
                    $model->itemInfoLists[$n++] = null !== $item ? itemInfoLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
