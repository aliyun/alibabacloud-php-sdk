<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody\ipamPools\tags;
use AlibabaCloud\Tea\Model;

class ipamPools extends Model
{
    /**
     * @example 28
     *
     * @var int
     */
    public $allocationDefaultCidrMask;

    /**
     * @example 32
     *
     * @var int
     */
    public $allocationMaxCidrMask;

    /**
     * @example 8
     *
     * @var int
     */
    public $allocationMinCidrMask;

    /**
     * @example 2023-04-19T16:49:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasSubPool;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example ipam-b5mtlx3q7xcnyr****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @example test description
     *
     * @var string
     */
    public $ipamPoolDescription;

    /**
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @example test
     *
     * @var string
     */
    public $ipamPoolName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ipamRegionId;

    /**
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @example private
     *
     * @var string
     */
    public $ipamScopeType;

    /**
     * @example 1210123456******
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example 2
     *
     * @var int
     */
    public $poolDepth;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $poolRegionId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ipam-pool-lfnwi4jok1ss0g****
     *
     * @var string
     */
    public $sourceIpamPoolId;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'allocationDefaultCidrMask' => 'AllocationDefaultCidrMask',
        'allocationMaxCidrMask'     => 'AllocationMaxCidrMask',
        'allocationMinCidrMask'     => 'AllocationMinCidrMask',
        'createTime'                => 'CreateTime',
        'hasSubPool'                => 'HasSubPool',
        'ipVersion'                 => 'IpVersion',
        'ipamId'                    => 'IpamId',
        'ipamPoolDescription'       => 'IpamPoolDescription',
        'ipamPoolId'                => 'IpamPoolId',
        'ipamPoolName'              => 'IpamPoolName',
        'ipamRegionId'              => 'IpamRegionId',
        'ipamScopeId'               => 'IpamScopeId',
        'ipamScopeType'             => 'IpamScopeType',
        'ownerId'                   => 'OwnerId',
        'poolDepth'                 => 'PoolDepth',
        'poolRegionId'              => 'PoolRegionId',
        'regionId'                  => 'RegionId',
        'sourceIpamPoolId'          => 'SourceIpamPoolId',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
    ];

    public function validate()
    {
    }

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
        if (isset($map['SourceIpamPoolId'])) {
            $model->sourceIpamPoolId = $map['SourceIpamPoolId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
