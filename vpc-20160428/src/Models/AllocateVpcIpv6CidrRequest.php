<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateVpcIpv6CidrRequest extends Model
{
    /**
     * @description The type of the IPv6 address pool. Valid values:
     *
     * - **aliyun** (default): IPv6 CIDR block is allocated by the system.
     *
     * - **custom**: custom IPv6 CIDR block.
     *
     * @example custom
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IPv6 CIDR block that you want to reserve.
     *
     * @example 2408:XXXX:0:a600::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The type of IPv6 CIDR block. Valid values:
     *
     *   **BGP** (default): BGP (Multi-ISP)
     *   **BGP_International**: BGP (Multi-ISP) International
     *   **ChinaMobile**: China Mobile (Single-ISP)
     *   **ChinaUnicom**: China Unicom (Single-ISP)
     *   **ChinaTelecom**: China Telecom (Single-ISP)
     *   **ChinaMobile_L2**: China Mobile (Single-ISP)_L2
     *   **ChinaUnicom_L2**: China Unicom (Single-ISP)_L2
     *   **ChinaTelecom_L2**: China Telecom (Single-ISP)_L2
     * > *   If your account is included in the whitelist, you can set this parameter to one of the following values: **ChinaTelecom**, **ChinaUnicom**, **ChinaMobile**, **ChinaTelecom_L2**, **ChinaUnicom_L2**, **ChinaMobile_L2**, and **BGP_International**.
     * > *   You can reserve only one IPv6 CIDR block of each type. You can reserve another IPv6 CIDR block only after the existing one is allocated to a VPC.
     *
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
     * @description The region ID of the VPC.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
    protected $_name = [
        'addressPoolType' => 'AddressPoolType',
        'clientToken' => 'ClientToken',
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6Isp' => 'Ipv6Isp',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolType) {
            $res['AddressPoolType'] = $this->addressPoolType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return AllocateVpcIpv6CidrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolType'])) {
            $model->addressPoolType = $map['AddressPoolType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
