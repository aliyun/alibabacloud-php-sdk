<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHostCluster extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $dedicatedHostClusterName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

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
    protected $_name = [
        'dedicatedHostClusterId'       => 'DedicatedHostClusterId',
        'regionId'                     => 'RegionId',
        'zoneId'                       => 'ZoneId',
        'dedicatedHostClusterName'     => 'DedicatedHostClusterName',
        'description'                  => 'Description',
        'resourceGroupId'              => 'ResourceGroupId',
        'tags'                         => 'Tags',
        'dedicatedHostClusterCapacity' => 'DedicatedHostClusterCapacity',
        'dedicatedHostIds'             => 'DedicatedHostIds',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostClusterId', $this->dedicatedHostClusterId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('dedicatedHostClusterName', $this->dedicatedHostClusterName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('dedicatedHostClusterCapacity', $this->dedicatedHostClusterCapacity, true);
        Model::validateRequired('dedicatedHostIds', $this->dedicatedHostIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostClusterName) {
            $res['DedicatedHostClusterName'] = $this->dedicatedHostClusterName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostClusterName'])) {
            $model->dedicatedHostClusterName = $map['DedicatedHostClusterName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
