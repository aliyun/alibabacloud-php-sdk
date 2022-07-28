<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class RenderDistributionOrderShrinkRequest extends Model
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
     * @var string
     */
    public $itemInfoListsShrink;

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
        'itemInfoListsShrink'    => 'ItemInfoLists',
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
        if (null !== $this->itemInfoListsShrink) {
            $res['ItemInfoLists'] = $this->itemInfoListsShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenderDistributionOrderShrinkRequest
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
            $model->itemInfoListsShrink = $map['ItemInfoLists'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
