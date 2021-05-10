<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $DBInstances;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $orderParamOut;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'orderType'            => 'OrderType',
        'DBInstances'          => 'DBInstances',
        'commodityCode'        => 'CommodityCode',
        'productCode'          => 'ProductCode',
        'businessInfo'         => 'BusinessInfo',
        'couponNo'             => 'CouponNo',
        'orderParamOut'        => 'OrderParamOut',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = $this->DBInstances;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->orderParamOut) {
            $res['OrderParamOut'] = $this->orderParamOut;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['DBInstances'])) {
            $model->DBInstances = $map['DBInstances'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['OrderParamOut'])) {
            $model->orderParamOut = $map['OrderParamOut'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
