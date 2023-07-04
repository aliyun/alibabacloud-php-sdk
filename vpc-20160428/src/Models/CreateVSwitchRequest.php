<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVSwitchRequest extends Model
{
    /**
     * @description The ID of the VPC where you want to create the vSwitch.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The ID of the vSwitch.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example vSwitch
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the vSwitch.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example 12
     *
     * @var int
     */
    public $ipv6CidrBlock;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The last eight bits of the IPv6 CIDR block of the vSwitch. Valid values: **0** to **255**.
     *
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
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example vSwitch-1
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The description of the vSwitch.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example vpc-257gqcdfvx6n****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the request.
     *
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $vpcIpv6CidrBlock;

    /**
     * @description The CIDR block of the vSwitch. Take note of the following limits:
     *
     *   The subnet mask of the CIDR block must be 16 to 29 bits in length.
     *   The CIDR block of the vSwitch must fall within the CIDR block of the VPC to which the vSwitch belongs.
     *   The CIDR block of a vSwitch cannot be the same as the destination CIDR block in a route entry of the VPC. However, it can be a subset of the destination CIDR block.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidrBlock'            => 'CidrBlock',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vSwitchName'          => 'VSwitchName',
        'vpcId'                => 'VpcId',
        'vpcIpv6CidrBlock'     => 'VpcIpv6CidrBlock',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
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
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcIpv6CidrBlock) {
            $res['VpcIpv6CidrBlock'] = $this->vpcIpv6CidrBlock;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
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
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcIpv6CidrBlock'])) {
            $model->vpcIpv6CidrBlock = $map['VpcIpv6CidrBlock'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
