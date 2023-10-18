<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateVpcCidrBlockRequest extends Model
{
    /**
     * @description The IPv6 CIDR block to be added.
     *
     * >  You must and can specify only one of **SecondaryCidrBlock** and **Ipv6CidrBlock**.
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $IPv6CidrBlock;

    /**
     * @description The version of the IP address. Valid values:
     *
     *   **IPV4**: the IPv4 address.
     *   **IPV6**: the IPv6 address. If you set **IpVersion** to **IPV6** and do not specify **SecondaryCidrBlock**, you can add a secondary IPv6 CIDR block to the VPC.
     *
     * @example IPV4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The ID of the IP Address Manager (IPAM) pool that contains IPv4 addresses.
     *
     * @example ipam-pool-sycmt3p2a9v63i****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The type of the IPv6 CIDR block. Valid values:
     *
     *   **BGP** (default)
     *   **ChinaMobile**
     *   **ChinaUnicom**
     *   **ChinaTelecom**
     *
     * >  If your Alibaba Cloud account is allowed to activate single-ISP bandwidth, you can set this parameter to **ChinaTelecom**, **ChinaUnicom**, or **ChinaMobile**.
     * @example BGP
     *
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
     * @description The region ID of the VPC to which you want to add a secondary CIDR block.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the region ID.
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
     * @description The IPv4 CIDR block to be added. Take note of the following requirements:
     *
     *   You can specify one of the following standard IPv4 CIDR blocks or their subnets as the secondary IPv4 CIDR block of the VPC: 192.168.0.0/16, 172.16.0.0/12, and 10.0.0.0/8.
     *   You can also use a custom CIDR block other than 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, 169.254.0.0/16, or their subnets as the secondary IPv4 CIDR block of the VPC.
     *
     * The CIDR block must meet the following requirements:
     *
     *   The CIDR block cannot start with 0. The subnet mask must be 8 to 28 bits in length.
     *   The CIDR block cannot overlap with the primary CIDR block or an existing secondary CIDR block of the VPC.
     *
     * >  You must and can specify only one of **SecondaryCidrBlock** and **Ipv6CidrBlock**.
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $secondaryCidrBlock;

    /**
     * @description The ID of the VPC to which you want to add a secondary CIDR block.
     *
     * @example vpc-o6wrloqsdqc9io3mg****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'IPv6CidrBlock'        => 'IPv6CidrBlock',
        'ipVersion'            => 'IpVersion',
        'ipamPoolId'           => 'IpamPoolId',
        'ipv6Isp'              => 'Ipv6Isp',
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateVpcCidrBlockRequest
     */
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
