<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandwidthLimitationRequest extends Model
{
    /**
     * @description The billing method of the instance. For more information, see [Billing overview](https://help.aliyun.com/document_detail/25398.html). Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * Default value: PostPaid.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance type. For information about the values, see [Overview of ECS instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * This parameter is required.
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies the operation for which to query the maximum public bandwidth. Valid values:
     *
     *   Upgrade: upgrades the public bandwidth.
     *   Downgrade: downgrades the public bandwidth.
     *   Create: creates an ECS instance.
     *
     * Default value: Create.
     * @example Upgrade
     *
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * >  This parameter is required when the OperationType parameter is set to Upgrade or Downgrade.
     * @example i-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The bidding policy for the pay-as-you-go instance. Valid values:
     *
     *   NoSpot: The instance is a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance for which you can specify the maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bid price. The market price can be up to the pay-as-you-go price.
     *
     * >  The SpotStrategy parameter takes effect only when the InstanceChargeType parameter is set to PostPaid.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceType'         => 'InstanceType',
        'operationType'        => 'OperationType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceId'           => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'spotStrategy'         => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthLimitationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
