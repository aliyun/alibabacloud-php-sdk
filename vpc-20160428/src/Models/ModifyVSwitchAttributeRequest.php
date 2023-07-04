<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVSwitchAttributeRequest extends Model
{
    /**
     * @description The new description for the vSwitch.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example This is my vswitch.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the IPv6 feature for the vSwitch. Valid values:
     *
     *   **true**: enables the IPv6 feature.
     *   **false**: disables the IPv6 feature. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $enableIPv6;

    /**
     * @description The last eight bits of the IPv6 CIDR block of the vSwitch. Valid values: **0** to **255**.
     *
     * You can set this parameter only when the IPv6 feature is enabled for the virtual private cloud (VPC) to which the vSwitch belongs.
     * @example 10
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
     * @description The ID of the region where the vSwitch is deployed. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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
     * @description The ID of the vSwitch.
     *
     * @example vsw-25nacdfvue4****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The new name for the vSwitch.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example VSwitch-1
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The IPv6 CIDR block of the VPC to which the vSwitch belongs.
     *
     * You can set this parameter only when the IPv6 feature is enabled for the VPC.
     * @example 2408:XXXX:312:3e00::/56
     *
     * @var string
     */
    public $vpcIpv6CidrBlock;
    protected $_name = [
        'description'          => 'Description',
        'enableIPv6'           => 'EnableIPv6',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vSwitchId'            => 'VSwitchId',
        'vSwitchName'          => 'VSwitchName',
        'vpcIpv6CidrBlock'     => 'VpcIpv6CidrBlock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableIPv6) {
            $res['EnableIPv6'] = $this->enableIPv6;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcIpv6CidrBlock) {
            $res['VpcIpv6CidrBlock'] = $this->vpcIpv6CidrBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVSwitchAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableIPv6'])) {
            $model->enableIPv6 = $map['EnableIPv6'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcIpv6CidrBlock'])) {
            $model->vpcIpv6CidrBlock = $map['VpcIpv6CidrBlock'];
        }

        return $model;
    }
}
