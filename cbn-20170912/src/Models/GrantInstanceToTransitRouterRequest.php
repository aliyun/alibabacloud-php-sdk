<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class GrantInstanceToTransitRouterRequest extends Model
{
    /**
     * @description Enter the ID of the Cloud Enterprise Network (CEN) instance to which the transit router belongs.
     *
     * This parameter is required.
     * @example cen-44m0p68spvlrqq****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * This parameter is required.
     * @example 1250123456123456
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The ID of the network instance.
     *
     * This parameter is required.
     * @example vpc-bp1h8vbrbcgohcju5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: VPC
     *   **ExpressConnect**: VBR
     *   **VPN**: IPsec connection
     *
     * This parameter is required.
     * @example VPC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The entity that pays the fees of the network instance. Valid values:
     *
     *   **PayByCenOwner**: the Alibaba Cloud account that owns the CEN instance.
     *   **PayByResourceOwner**: the Alibaba Cloud account that owns the network instance.
     *
     * @example PayByCenOwner
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
     * @description The ID of the region where the network instance is deployed.
     *
     * You can call the [DescribeChildInstanceRegions](https://help.aliyun.com/document_detail/132080.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cenId'                => 'CenId',
        'cenOwnerId'           => 'CenOwnerId',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantInstanceToTransitRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
