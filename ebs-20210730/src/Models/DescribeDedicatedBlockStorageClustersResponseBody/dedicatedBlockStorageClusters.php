<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageClusterCapacity;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\tags;
use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusters extends Model
{
    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @example 1657113211
     *
     * @var string
     */
    public $createTime;

    /**
     * @var dedicatedBlockStorageClusterCapacity
     */
    public $dedicatedBlockStorageClusterCapacity;

    /**
     * @example dbsc-f8z4d3k4nsgg9okb****
     *
     * @var string
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @example myDBSCCluster
     *
     * @var string
     */
    public $dedicatedBlockStorageClusterName;

    /**
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @example 1673020800
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $supportedCategory;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example Standard
     *
     * @var string
     */
    public $type;

    /**
     * @example cn-heyuan-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'                             => 'Category',
        'createTime'                           => 'CreateTime',
        'dedicatedBlockStorageClusterCapacity' => 'DedicatedBlockStorageClusterCapacity',
        'dedicatedBlockStorageClusterId'       => 'DedicatedBlockStorageClusterId',
        'dedicatedBlockStorageClusterName'     => 'DedicatedBlockStorageClusterName',
        'description'                          => 'Description',
        'expiredTime'                          => 'ExpiredTime',
        'performanceLevel'                     => 'PerformanceLevel',
        'regionId'                             => 'RegionId',
        'resourceGroupId'                      => 'ResourceGroupId',
        'status'                               => 'Status',
        'supportedCategory'                    => 'SupportedCategory',
        'tags'                                 => 'Tags',
        'type'                                 => 'Type',
        'zoneId'                               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dedicatedBlockStorageClusterCapacity) {
            $res['DedicatedBlockStorageClusterCapacity'] = null !== $this->dedicatedBlockStorageClusterCapacity ? $this->dedicatedBlockStorageClusterCapacity->toMap() : null;
        }
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
        }
        if (null !== $this->dedicatedBlockStorageClusterName) {
            $res['DedicatedBlockStorageClusterName'] = $this->dedicatedBlockStorageClusterName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (null !== $this->supportedCategory) {
            $res['SupportedCategory'] = $this->supportedCategory;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedBlockStorageClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DedicatedBlockStorageClusterCapacity'])) {
            $model->dedicatedBlockStorageClusterCapacity = dedicatedBlockStorageClusterCapacity::fromMap($map['DedicatedBlockStorageClusterCapacity']);
        }
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
        }
        if (isset($map['DedicatedBlockStorageClusterName'])) {
            $model->dedicatedBlockStorageClusterName = $map['DedicatedBlockStorageClusterName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
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
        if (isset($map['SupportedCategory'])) {
            $model->supportedCategory = $map['SupportedCategory'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
