<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcRequest extends Model
{
    /**
     * @description The CIDR block of the VPC.
     *
     *   You can specify one of the following CIDR blocks or their subsets as the primary IPv4 CIDR block of the VPC: 192.168.0.0/16, 172.16.0.0/12, and 10.0.0.0/8. These CIDR blocks are standard private CIDR blocks as defined by Request for Comments (RFC) documents. The subnet mask must be 8 to 28 bits in length.
     *   You can also use a custom CIDR block other than 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, 169.254.0.0/16, and their subnets as the primary IPv4 CIDR block of the VPC.
     *
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the VPC.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example This is my first Vpc
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @var string
     */
    public $ipv4IpamPoolId;

    /**
     * @description The IPv6 CIDR blocks of the VPC.
     *
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The type of the IPv6 CIDR block. Valid values:
     *
     *   **BGP** (default): Alibaba Cloud Border Gateway Protocol (BGP)
     *   **ChinaMobile**: China Mobile (single ISP).
     *   **ChinaUnicom**: China Unicom (single ISP).
     *   **ChinaTelecom**: China Telecom (single ISP).
     *
     * >  If your Alibaba Cloud account is allowed to use single-ISP bandwidth, you can set this parameter to **ChinaTelecom**, **ChinaUnicom**, or **ChinaMobile**.
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
     * @description The ID of the region to which the VPC belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * For more information about resource groups, see [What is a resource group?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
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
     * @description The user CIDR block. Separate user CIDR blocks with commas (,). You can specify up to three user CIDR blocks.
     *
     * For more information about user CIDR blocks, see the `What is a user CIDR block?` section in [VPC FAQ](~~185311~~).
     * @example 192.168.0.0/12
     *
     * @var string
     */
    public $userCidr;

    /**
     * @description The name of the VPC.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock'            => 'CidrBlock',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'dryRun'               => 'DryRun',
        'enableIpv6'           => 'EnableIpv6',
        'ipv4IpamPoolId'       => 'Ipv4IpamPoolId',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'ipv6Isp'              => 'Ipv6Isp',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'userCidr'             => 'UserCidr',
        'vpcName'              => 'VpcName',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->ipv4IpamPoolId) {
            $res['Ipv4IpamPoolId'] = $this->ipv4IpamPoolId;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->userCidr) {
            $res['UserCidr'] = $this->userCidr;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcRequest
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['Ipv4IpamPoolId'])) {
            $model->ipv4IpamPoolId = $map['Ipv4IpamPoolId'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['UserCidr'])) {
            $model->userCidr = $map['UserCidr'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
