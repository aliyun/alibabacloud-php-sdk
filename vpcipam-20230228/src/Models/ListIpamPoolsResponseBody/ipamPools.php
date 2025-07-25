<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody\ipamPools\tags;
use AlibabaCloud\Tea\Model;

class ipamPools extends Model
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
     * @description The time when the IPAM pool was created.
     *
     * @example 2023-04-19T16:49:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the pool is a subpool. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasSubPool;

    /**
     * @description The IP version. Only **IPv4** may be returned.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-b5mtlx3q7xcnyr****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The description of the IPAM pool.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamPoolDescription;

    /**
     * @description The ID of the IPAM pool.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The name of the IPAM pool.
     *
     * @example test
     *
     * @var string
     */
    public $ipamPoolName;

    /**
     * @description The ID of the region where the IPAM to which the IPAM pool belongs is hosted.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ipamRegionId;

    /**
     * @description The ID of the IPAM scope.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @description The type of the IPAM scope. Valid values:
     *
     *   **public**
     *   **private**
     *
     * @example private
     *
     * @var string
     */
    public $ipamScopeType;

    /**
     * @var string
     */
    public $ipv6Isp;

    /**
     * @description Whether it is a shared pool.
     *
     * @example true
     *
     * @var bool
     */
    public $isShared;

    /**
     * @description The Alibaba Cloud account of the owner for the IPAM pool.
     *
     * @example 1210123456******
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The depth of the IPAM pool. Valid values: **0 to 10**.
     *
     * @example 2
     *
     * @var int
     */
    public $poolDepth;

    /**
     * @description The effective region of the IPAM pool. The ID of the effective region for the IPAM pool.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $poolRegionId;

    /**
     * @description The ID of the region where the operation is called.
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
     * @description The ID of the source IPAM pool.
     *
     * @example ipam-pool-lfnwi4jok1ss0g****
     *
     * @var string
     */
    public $sourceIpamPoolId;

    /**
     * @description The status of the IPAM pool. Valid values:
     *
     *   **Creating**
     *   **Created**: indicates that the creation is complete.
     *   **Modifying**
     *   **Deleting**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'allocationDefaultCidrMask' => 'AllocationDefaultCidrMask',
        'allocationMaxCidrMask' => 'AllocationMaxCidrMask',
        'allocationMinCidrMask' => 'AllocationMinCidrMask',
        'autoImport' => 'AutoImport',
        'createTime' => 'CreateTime',
        'hasSubPool' => 'HasSubPool',
        'ipVersion' => 'IpVersion',
        'ipamId' => 'IpamId',
        'ipamPoolDescription' => 'IpamPoolDescription',
        'ipamPoolId' => 'IpamPoolId',
        'ipamPoolName' => 'IpamPoolName',
        'ipamRegionId' => 'IpamRegionId',
        'ipamScopeId' => 'IpamScopeId',
        'ipamScopeType' => 'IpamScopeType',
        'ipv6Isp' => 'Ipv6Isp',
        'isShared' => 'IsShared',
        'ownerId' => 'OwnerId',
        'poolDepth' => 'PoolDepth',
        'poolRegionId' => 'PoolRegionId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIpamPoolId' => 'SourceIpamPoolId',
        'status' => 'Status',
        'tags' => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hasSubPool) {
            $res['HasSubPool'] = $this->hasSubPool;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamPoolDescription) {
            $res['IpamPoolDescription'] = $this->ipamPoolDescription;
        }
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->ipamPoolName) {
            $res['IpamPoolName'] = $this->ipamPoolName;
        }
        if (null !== $this->ipamRegionId) {
            $res['IpamRegionId'] = $this->ipamRegionId;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }
        if (null !== $this->ipamScopeType) {
            $res['IpamScopeType'] = $this->ipamScopeType;
        }
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }
        if (null !== $this->isShared) {
            $res['IsShared'] = $this->isShared;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolDepth) {
            $res['PoolDepth'] = $this->poolDepth;
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
        if (null !== $this->sourceIpamPoolId) {
            $res['SourceIpamPoolId'] = $this->sourceIpamPoolId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamPools
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HasSubPool'])) {
            $model->hasSubPool = $map['HasSubPool'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamPoolDescription'])) {
            $model->ipamPoolDescription = $map['IpamPoolDescription'];
        }
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['IpamPoolName'])) {
            $model->ipamPoolName = $map['IpamPoolName'];
        }
        if (isset($map['IpamRegionId'])) {
            $model->ipamRegionId = $map['IpamRegionId'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }
        if (isset($map['IpamScopeType'])) {
            $model->ipamScopeType = $map['IpamScopeType'];
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }
        if (isset($map['IsShared'])) {
            $model->isShared = $map['IsShared'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolDepth'])) {
            $model->poolDepth = $map['PoolDepth'];
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
        if (isset($map['SourceIpamPoolId'])) {
            $model->sourceIpamPoolId = $map['SourceIpamPoolId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
