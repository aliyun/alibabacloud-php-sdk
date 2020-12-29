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
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var dedicatedHostClusterCapacity
     */
    public $dedicatedHostClusterCapacity;

    /**
     * @var dedicatedHostIds
     */
    public $dedicatedHostIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dedicatedHostClusterName;
    protected $_name = [
        'description'                  => 'Description',
        'dedicatedHostClusterId'       => 'DedicatedHostClusterId',
        'resourceGroupId'              => 'ResourceGroupId',
        'zoneId'                       => 'ZoneId',
        'tags'                         => 'Tags',
        'dedicatedHostClusterCapacity' => 'DedicatedHostClusterCapacity',
        'dedicatedHostIds'             => 'DedicatedHostIds',
        'regionId'                     => 'RegionId',
        'dedicatedHostClusterName'     => 'DedicatedHostClusterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->dedicatedHostClusterCapacity) {
            $res['DedicatedHostClusterCapacity'] = null !== $this->dedicatedHostClusterCapacity ? $this->dedicatedHostClusterCapacity->toMap() : null;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = null !== $this->dedicatedHostIds ? $this->dedicatedHostIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dedicatedHostClusterName) {
            $res['DedicatedHostClusterName'] = $this->dedicatedHostClusterName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['DedicatedHostClusterCapacity'])) {
            $model->dedicatedHostClusterCapacity = dedicatedHostClusterCapacity::fromMap($map['DedicatedHostClusterCapacity']);
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = dedicatedHostIds::fromMap($map['DedicatedHostIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DedicatedHostClusterName'])) {
            $model->dedicatedHostClusterName = $map['DedicatedHostClusterName'];
        }

        return $model;
    }
}
