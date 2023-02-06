<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHostCluster extends Model
{
    /**
     * @description The capacity of the dedicated host cluster.
     *
     * @var dedicatedHostClusterCapacity
     */
    public $dedicatedHostClusterCapacity;

    /**
     * @description The ID of the dedicated host cluster.
     *
     * @example dc-bp12wlf6am0vz9v2****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The name of the dedicated host cluster.
     *
     * @example myDDHCluster
     *
     * @var string
     */
    public $dedicatedHostClusterName;

    /**
     * @description The IDs of dedicated hosts in the dedicated host cluster.
     *
     * @var dedicatedHostIds
     */
    public $dedicatedHostIds;

    /**
     * @description The description of the dedicated host cluster.
     *
     * @example This-is-my-DDHCluster
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID of the dedicated host cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the dedicated host cluster belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the dedicated host cluster.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The zone ID of the dedicated host cluster.
     *
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dedicatedHostClusterCapacity' => 'DedicatedHostClusterCapacity',
        'dedicatedHostClusterId'       => 'DedicatedHostClusterId',
        'dedicatedHostClusterName'     => 'DedicatedHostClusterName',
        'dedicatedHostIds'             => 'DedicatedHostIds',
        'description'                  => 'Description',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'tags'                         => 'Tags',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterCapacity) {
            $res['DedicatedHostClusterCapacity'] = null !== $this->dedicatedHostClusterCapacity ? $this->dedicatedHostClusterCapacity->toMap() : null;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostClusterName) {
            $res['DedicatedHostClusterName'] = $this->dedicatedHostClusterName;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = null !== $this->dedicatedHostIds ? $this->dedicatedHostIds->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusterCapacity'])) {
            $model->dedicatedHostClusterCapacity = dedicatedHostClusterCapacity::fromMap($map['DedicatedHostClusterCapacity']);
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostClusterName'])) {
            $model->dedicatedHostClusterName = $map['DedicatedHostClusterName'];
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = dedicatedHostIds::fromMap($map['DedicatedHostIds']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
