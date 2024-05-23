<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRenewalPriceRequest extends Model
{
    /**
     * @description The additional business information about the instance.
     *
     * @example 121436975448952
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance type of the instance. For more information, see [Primary instance types](https://help.aliyun.com/document_detail/26312.html). By default, the current instance type applies.
     *
     * @example mysql.n2.medium.2c
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of order. Set the value to **BUY**.
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The number of the instances. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute operation to query the resource group ID.
     *
     * @example rg-acfmx****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The renewal cycle of the instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * This parameter is required.
     * @example Year
     *
     * @var string
     */
    public $timeType;

    /**
     * @description The subscription duration of the instance. Valid values:
     *
     *   If you set the **TimeType** parameter to **Year**, the value of the UsedTime parameter is within the range of **1 to 3**.
     *   If you set the **TimeType** parameter to **Month**, the value of the UsedTime parameter is within the range of **1 to 9**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceId'         => 'DBInstanceId',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'quantity'             => 'Quantity',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'timeType'             => 'TimeType',
        'usedTime'             => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenewalPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
