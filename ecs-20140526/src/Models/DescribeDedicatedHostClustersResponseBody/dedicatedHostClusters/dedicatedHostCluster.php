<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\tags;

class dedicatedHostCluster extends Model
{
    /**
     * @var dedicatedHostClusterCapacity
     */
    public $dedicatedHostClusterCapacity;
    /**
     * @var string
     */
    public $dedicatedHostClusterId;
    /**
     * @var string
     */
    public $dedicatedHostClusterName;
    /**
     * @var dedicatedHostIds
     */
    public $dedicatedHostIds;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var tags
     */
    public $tags;
    /**
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
        if (null !== $this->dedicatedHostClusterCapacity) {
            $this->dedicatedHostClusterCapacity->validate();
        }
        if (null !== $this->dedicatedHostIds) {
            $this->dedicatedHostIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterCapacity) {
            $res['DedicatedHostClusterCapacity'] = null !== $this->dedicatedHostClusterCapacity ? $this->dedicatedHostClusterCapacity->toArray($noStream) : $this->dedicatedHostClusterCapacity;
        }

        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }

        if (null !== $this->dedicatedHostClusterName) {
            $res['DedicatedHostClusterName'] = $this->dedicatedHostClusterName;
        }

        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = null !== $this->dedicatedHostIds ? $this->dedicatedHostIds->toArray($noStream) : $this->dedicatedHostIds;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
