<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateEipAddressRequest extends Model
{
    /**
     * @description The ID of the EIP that you want to associate with an instance.
     *
     * @example eip-2zeerraiwb7ujsxdc****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate a token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance with which you want to associate the EIP.
     *
     * You can enter the ID of a NAT gateway, CLB instance, ECS instance, secondary ENI, HAVIP, or IP address.
     * @example i-2zebb08phyczzawe****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region in which the instance with which you want to associate the EIP resides.
     *
     * >  This parameter is required only when the EIP is added to a shared Global Accelerator (GA) instance.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The type of the instance with which you want to associate the EIP. Valid values:
     *
     *   **Nat**: NAT gateway
     *   **SlbInstance**: CLB instance
     *   **EcsInstance** (default): ECS instance
     *   **NetworkInterface**: secondary ENI
     *   **HaVip**: HAVIP
     *   **IpAddress**: IP address
     *
     * >  The default value is **EcsInstance**. If the instance with which you want to associate the EIP is not an ECS instance, this parameter is required.
     * @example EcsInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The association mode. Valid values:
     *
     *   **NAT** (default): NAT mode
     *   **MULTI_BINDED**: multi-EIP-to-ENI mode
     *   **BINDED**: cut-network interface controller mode
     *
     * >  This parameter is required only when **InstanceType** is set to **NetworkInterface**.
     * @example NAT
     *
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The IP address in the CIDR block of the vSwitch.
     *
     * If you leave this parameter empty, the system allocates a private IP address based on the VPC ID and vSwitch ID.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the region to which the EIP belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the region ID.
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

    /**
     * @description The ID of the VPC in which an IPv4 gateway is created. The VPC and the EIP must be in the same region.
     *
     * When you associate an EIP with an IP address, the system can enable the IP address to access the Internet based on VPC route configurations.
     *
     * >  This parameter is required if **InstanceType** is set to **IpAddress**, which indicates that the EIP is to be associated with an IP address.
     * @example vpc-257gqcdfvx6n****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allocationId'         => 'AllocationId',
        'clientToken'          => 'ClientToken',
        'instanceId'           => 'InstanceId',
        'instanceRegionId'     => 'InstanceRegionId',
        'instanceType'         => 'InstanceType',
        'mode'                 => 'Mode',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'privateIpAddress'     => 'PrivateIpAddress',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
