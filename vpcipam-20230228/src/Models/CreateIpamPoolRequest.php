<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateIpamPoolRequest extends Model
{
    /**
     * @description The default network mask assigned to the IPAM pool.
     *
     * An IPv4 mask must be **0 to 32** bits in length.
     *
     * @example 28
     *
     * @var int
     */
    public $allocationDefaultCidrMask;

    /**
     * @description The maximum network mask assigned to the IPAM pool.
     *
     * An IPv4 mask must be **0 to 32** bits in length.
     *
     * @example 32
     *
     * @var int
     */
    public $allocationMaxCidrMask;

    /**
     * @description The minimum network mask assigned to the IPAM pool.
     *
     * An IPv4 mask must be **0 to 32** bits in length.
     *
     * @example 8
     *
     * @var int
     */
    public $allocationMinCidrMask;

    /**
     * @description Whether the pool has the auto-import feature enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoImport;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IP version. Only **IPv4** is supported.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The description of the IPAM pool.
     *
     * It must be 2 to 256 characters in length. It must start with a letter, but cannot start with a `http://` or `https://`. This parameter is empty by default.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamPoolDescription;

    /**
     * @description The name of the IPAM pool.
     *
     * It must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example abc
     *
     * @var string
     */
    public $ipamPoolName;

    /**
     * @description The ID of the IPAM scope.
     *
     * This parameter is required.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

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
     * @description The effective region of the IPAM pool.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $poolRegionId;

    /**
     * @description The ID of the region where the IPAM instance is hosted. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
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
     * @description The ID of the source IPAM pool.
     *
     * >  If you do not specify this parameter, the pool is a parent pool.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $sourceIpamPoolId;

    /**
     * @description The tag list.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'allocationDefaultCidrMask' => 'AllocationDefaultCidrMask',
        'allocationMaxCidrMask' => 'AllocationMaxCidrMask',
        'allocationMinCidrMask' => 'AllocationMinCidrMask',
        'autoImport' => 'AutoImport',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipVersion' => 'IpVersion',
        'ipamPoolDescription' => 'IpamPoolDescription',
        'ipamPoolName' => 'IpamPoolName',
        'ipamScopeId' => 'IpamScopeId',
        'ipv6Isp' => 'Ipv6Isp',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'poolRegionId' => 'PoolRegionId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIpamPoolId' => 'SourceIpamPoolId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationDefaultCidrMask) {
            $res['AllocationDefaultCidrMask'] = $this->allocationDefaultCidrMask;
        }
        if (null !== $this->allocationMaxCidrMask) {
            $res['AllocationMaxCidrMask'] = $this->allocationMaxCidrMask;
        }
        if (null !== $this->allocationMinCidrMask) {
            $res['AllocationMinCidrMask'] = $this->allocationMinCidrMask;
        }
        if (null !== $this->autoImport) {
            $res['AutoImport'] = $this->autoImport;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ipamPoolDescription) {
            $res['IpamPoolDescription'] = $this->ipamPoolDescription;
        }
        if (null !== $this->ipamPoolName) {
            $res['IpamPoolName'] = $this->ipamPoolName;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
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
        if (null !== $this->poolRegionId) {
            $res['PoolRegionId'] = $this->poolRegionId;
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
        if (null !== $this->sourceIpamPoolId) {
            $res['SourceIpamPoolId'] = $this->sourceIpamPoolId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationDefaultCidrMask'])) {
            $model->allocationDefaultCidrMask = $map['AllocationDefaultCidrMask'];
        }
        if (isset($map['AllocationMaxCidrMask'])) {
            $model->allocationMaxCidrMask = $map['AllocationMaxCidrMask'];
        }
        if (isset($map['AllocationMinCidrMask'])) {
            $model->allocationMinCidrMask = $map['AllocationMinCidrMask'];
        }
        if (isset($map['AutoImport'])) {
            $model->autoImport = $map['AutoImport'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IpamPoolDescription'])) {
            $model->ipamPoolDescription = $map['IpamPoolDescription'];
        }
        if (isset($map['IpamPoolName'])) {
            $model->ipamPoolName = $map['IpamPoolName'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
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
        if (isset($map['PoolRegionId'])) {
            $model->poolRegionId = $map['PoolRegionId'];
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
        if (isset($map['SourceIpamPoolId'])) {
            $model->sourceIpamPoolId = $map['SourceIpamPoolId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
