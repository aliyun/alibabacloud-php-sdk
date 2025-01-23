<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody\ipamPools\tags;

class ipamPools extends Model
{
    /**
     * @var int
     */
    public $allocationDefaultCidrMask;
    /**
     * @var int
     */
    public $allocationMaxCidrMask;
    /**
     * @var int
     */
    public $allocationMinCidrMask;
    /**
     * @var bool
     */
    public $autoImport;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var bool
     */
    public $hasSubPool;
    /**
     * @var string
     */
    public $ipVersion;
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string
     */
    public $ipamPoolDescription;
    /**
     * @var string
     */
    public $ipamPoolId;
    /**
     * @var string
     */
    public $ipamPoolName;
    /**
     * @var string
     */
    public $ipamRegionId;
    /**
     * @var string
     */
    public $ipamScopeId;
    /**
     * @var string
     */
    public $ipamScopeType;
    /**
     * @var bool
     */
    public $isShared;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var int
     */
    public $poolDepth;
    /**
     * @var string
     */
    public $poolRegionId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $sourceIpamPoolId;
    /**
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
        'autoImport'                => 'AutoImport',
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
        'isShared'                  => 'IsShared',
        'ownerId'                   => 'OwnerId',
        'poolDepth'                 => 'PoolDepth',
        'poolRegionId'              => 'PoolRegionId',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'sourceIpamPoolId'          => 'SourceIpamPoolId',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
