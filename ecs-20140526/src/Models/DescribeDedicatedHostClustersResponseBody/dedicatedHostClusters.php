<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostClusterCapacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusters extends Model
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
     * @var tags[]
     */
    public $tags;

    /**
     * @var dedicatedHostClusterCapacity
     */
    public $dedicatedHostClusterCapacity;

    /**
     * @var string[]
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dedicatedHostClusterCapacity) {
            $res['DedicatedHostClusterCapacity'] = null !== $this->dedicatedHostClusterCapacity ? $this->dedicatedHostClusterCapacity->toMap() : null;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
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
     * @return dedicatedHostClusters
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DedicatedHostClusterCapacity'])) {
            $model->dedicatedHostClusterCapacity = dedicatedHostClusterCapacity::fromMap($map['DedicatedHostClusterCapacity']);
        }
        if (isset($map['DedicatedHostIds'])) {
            if (!empty($map['DedicatedHostIds'])) {
                $model->dedicatedHostIds = $map['DedicatedHostIds'];
            }
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
