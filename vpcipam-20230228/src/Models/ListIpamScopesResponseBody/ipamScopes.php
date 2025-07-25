<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesResponseBody\ipamScopes\tags;
use AlibabaCloud\Tea\Model;

class ipamScopes extends Model
{
    /**
     * @description The time when the IPAM scope was created.
     *
     * @example 2022-04-18T03:12:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The description of the IPAM scope.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamScopeDescription;

    /**
     * @description The ID of the IPAM scope.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @description The name of the IPAM scope.
     *
     * @example test
     *
     * @var string
     */
    public $ipamScopeName;

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
     * @description Indicates whether the scope is the default scope. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The Alibaba Cloud account that owns the IPAM scope.
     *
     * @example 1210123456******
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of pools in the IPAM scope.
     *
     * @example 2
     *
     * @var int
     */
    public $poolCount;

    /**
     * @description The region ID of the IPAM.
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
     * @description The status of the IPAM scope. Valid values:
     *
     *   **Creating**
     *   **Created**
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
        'createTime' => 'CreateTime',
        'ipamId' => 'IpamId',
        'ipamScopeDescription' => 'IpamScopeDescription',
        'ipamScopeId' => 'IpamScopeId',
        'ipamScopeName' => 'IpamScopeName',
        'ipamScopeType' => 'IpamScopeType',
        'isDefault' => 'IsDefault',
        'ownerId' => 'OwnerId',
        'poolCount' => 'PoolCount',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamScopeDescription) {
            $res['IpamScopeDescription'] = $this->ipamScopeDescription;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }
        if (null !== $this->ipamScopeName) {
            $res['IpamScopeName'] = $this->ipamScopeName;
        }
        if (null !== $this->ipamScopeType) {
            $res['IpamScopeType'] = $this->ipamScopeType;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolCount) {
            $res['PoolCount'] = $this->poolCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return ipamScopes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamScopeDescription'])) {
            $model->ipamScopeDescription = $map['IpamScopeDescription'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }
        if (isset($map['IpamScopeName'])) {
            $model->ipamScopeName = $map['IpamScopeName'];
        }
        if (isset($map['IpamScopeType'])) {
            $model->ipamScopeType = $map['IpamScopeType'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolCount'])) {
            $model->poolCount = $map['PoolCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
