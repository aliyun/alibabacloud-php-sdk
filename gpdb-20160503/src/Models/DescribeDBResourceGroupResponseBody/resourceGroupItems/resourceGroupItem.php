<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems\resourceGroupItem\roleList;
use AlibabaCloud\Tea\Model;

class resourceGroupItem extends Model
{
    /**
     * @description The configurations of the resource group.
     *
     * >
     *
     *   CpuRateLimit: the percentage of CPU resources that are available for the resource group. Unit: %.
     *
     *   MemoryLimit: the percentage of memory resources that are available for the resource group. Unit: %.
     *
     *   MemorySharedQuota: the percentage of memory resources shared among transactions that are submitted to the resource group. Unit: %. Default value: 80.
     *
     *   MemorySpillRatio: the memory spill ratio for memory-intensive transactions. When the memory that is used by memory-intensive transactions reaches this value, data is spilled to disks. Unit: %. Default value: 0.
     *
     *   Concurrency: the maximum number of concurrent transactions or parallel queries that are allowed for a resource group. Default value: 20.
     *
     * @example {"CpuRateLimit":"10","MemoryLimit":"12","MemorySharedQuota":"20","MemorySpillRatio":"75","Concurrency":"3"}
     *
     * @var string
     */
    public $resourceGroupConfig;

    /**
     * @description The name of the resource group.
     *
     * @example testgroup
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The roles.
     *
     * @var roleList
     */
    public $roleList;
    protected $_name = [
        'resourceGroupConfig' => 'ResourceGroupConfig',
        'resourceGroupName'   => 'ResourceGroupName',
        'roleList'            => 'RoleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupConfig) {
            $res['ResourceGroupConfig'] = $this->resourceGroupConfig;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->roleList) {
            $res['RoleList'] = null !== $this->roleList ? $this->roleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroupItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupConfig'])) {
            $model->resourceGroupConfig = $map['ResourceGroupConfig'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['RoleList'])) {
            $model->roleList = roleList::fromMap($map['RoleList']);
        }

        return $model;
    }
}
