<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyCreateDistributionOrderRequest\itemInfoLists;
use AlibabaCloud\Tea\Model;

class ApplyCreateDistributionOrderRequest extends Model
{
    /**
     * @example u***01
     *
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @example 789***3323
     *
     * @var string
     */
    public $distributionOutTradeId;

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
     * @example 12***29
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'buyerId'                => 'BuyerId',
        'deliveryAddress'        => 'DeliveryAddress',
        'distributionOutTradeId' => 'DistributionOutTradeId',
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
        if (null !== $this->distributionOutTradeId) {
            $res['DistributionOutTradeId'] = $this->distributionOutTradeId;
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
     * @return ApplyCreateDistributionOrderRequest
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
        if (isset($map['DistributionOutTradeId'])) {
            $model->distributionOutTradeId = $map['DistributionOutTradeId'];
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
