<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class AssociateVpcCidrBlockRequest extends Model
{
    /**
     * @var string
     */
    public $IPv6CidrBlock;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ipamPoolId;

    /**
     * @var string
     */
    public $ipv6Isp;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
     * @var string
     */
    public $secondaryCidrBlock;

    /**
     * @var int
     */
    public $secondaryCidrMask;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'IPv6CidrBlock' => 'IPv6CidrBlock',
        'ipVersion' => 'IpVersion',
        'ipamPoolId' => 'IpamPoolId',
        'ipv6Isp' => 'Ipv6Isp',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'secondaryCidrBlock' => 'SecondaryCidrBlock',
        'secondaryCidrMask' => 'SecondaryCidrMask',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv6CidrBlock) {
            $res['IPv6CidrBlock'] = $this->IPv6CidrBlock;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }

        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
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

        if (null !== $this->secondaryCidrBlock) {
            $res['SecondaryCidrBlock'] = $this->secondaryCidrBlock;
        }

        if (null !== $this->secondaryCidrMask) {
            $res['SecondaryCidrMask'] = $this->secondaryCidrMask;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPv6CidrBlock'])) {
            $model->IPv6CidrBlock = $map['IPv6CidrBlock'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }

        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
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

        if (isset($map['SecondaryCidrBlock'])) {
            $model->secondaryCidrBlock = $map['SecondaryCidrBlock'];
        }

        if (isset($map['SecondaryCidrMask'])) {
            $model->secondaryCidrMask = $map['SecondaryCidrMask'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
