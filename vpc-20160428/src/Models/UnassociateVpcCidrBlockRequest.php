<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UnassociateVpcCidrBlockRequest extends Model
{
    /**
     * @description The secondary IPv6 CIDR block to be deleted.
     *
     * >  You must set one of the **Ipv6CidrBlock** and **SecondaryCidrBlock** parameters.
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $IPv6CidrBlock;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the VPC to which the secondary CIDR block to be deleted belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example ch-hangzhou
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
     * @description The secondary IPv4 CIDR block to be deleted.
     *
     * >  You must set one of the **SecondaryCidrBlock** and **Ipv6CidrBlock** parameters.
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $secondaryCidrBlock;

    /**
     * @description The ID of the VPC from which you want to delete a secondary CIDR block.
     *
     * @example vpc-o6wrloqsdqc9io3mg****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'IPv6CidrBlock'        => 'IPv6CidrBlock',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secondaryCidrBlock'   => 'SecondaryCidrBlock',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPv6CidrBlock) {
            $res['IPv6CidrBlock'] = $this->IPv6CidrBlock;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassociateVpcCidrBlockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPv6CidrBlock'])) {
            $model->IPv6CidrBlock = $map['IPv6CidrBlock'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
