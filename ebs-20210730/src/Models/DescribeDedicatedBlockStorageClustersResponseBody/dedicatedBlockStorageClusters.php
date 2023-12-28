<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageClusterCapacity;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\tags;
use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusters extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @description The category of disks that can be created in the dedicated block storage cluster.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the dedicated block storage cluster was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1657113211
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The storage capacity of the dedicated block storage cluster.
     *
     * @var dedicatedBlockStorageClusterCapacity
     */
    public $dedicatedBlockStorageClusterCapacity;

    /**
     * @description The ID of the dedicated block storage cluster.
     *
     * @example dbsc-f8z4d3k4nsgg9okb****
     *
     * @var string
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @description The name of the dedicated block storage cluster.
     *
     * @example myDBSCCluster
     *
     * @var string
     */
    public $dedicatedBlockStorageClusterName;

    /**
     * @description The description of the dedicated block storage cluster.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableThinProvision;

    /**
     * @description The time when the dedicated block storage cluster expires. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1673020800
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The performance level of disks. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * >  This parameter takes effect only if Category is set to cloud_essd.
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The region ID of the dedicated block storage cluster.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the dedicated block storage cluster belongs.
     *
     * @example rg-aekzsoux****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var float
     */
    public $sizeOverSoldRatio;

    /**
     * @description The state of the dedicated block storage cluster. Valid values:
     *
     *   Preparing
     *   Running
     *   Expired
     *   Offline
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageDomain;

    /**
     * @description This parameter is not supported.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $supportedCategory;

    /**
     * @description The tags of the dedicated block storage cluster.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the dedicated block storage cluster. Valid values:
     *
     *   Standard: basic dedicated block storage cluster. ESSDs at performance level 0 (PL0 ESSDs) can be created in basic dedicated block storage clusters.
     *   Premium: performance dedicated block storage cluster. ESSDs at performance level 1 (PL1 ESSDs) can be created in performance dedicated block storage clusters.
     *
     * @example Standard
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone ID of the dedicated block storage cluster.
     *
     * @example cn-heyuan-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'                               => 'AliUid',
        'category'                             => 'Category',
        'createTime'                           => 'CreateTime',
        'dedicatedBlockStorageClusterCapacity' => 'DedicatedBlockStorageClusterCapacity',
        'dedicatedBlockStorageClusterId'       => 'DedicatedBlockStorageClusterId',
        'dedicatedBlockStorageClusterName'     => 'DedicatedBlockStorageClusterName',
        'description'                          => 'Description',
        'enableThinProvision'                  => 'EnableThinProvision',
        'expiredTime'                          => 'ExpiredTime',
        'performanceLevel'                     => 'PerformanceLevel',
        'regionId'                             => 'RegionId',
        'resourceGroupId'                      => 'ResourceGroupId',
        'sizeOverSoldRatio'                    => 'SizeOverSoldRatio',
        'status'                               => 'Status',
        'storageDomain'                        => 'StorageDomain',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
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
        if (null !== $this->enableThinProvision) {
            $res['EnableThinProvision'] = $this->enableThinProvision;
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
        if (null !== $this->sizeOverSoldRatio) {
            $res['SizeOverSoldRatio'] = $this->sizeOverSoldRatio;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageDomain) {
            $res['StorageDomain'] = $this->storageDomain;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
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
        if (isset($map['EnableThinProvision'])) {
            $model->enableThinProvision = $map['EnableThinProvision'];
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
        if (isset($map['SizeOverSoldRatio'])) {
            $model->sizeOverSoldRatio = $map['SizeOverSoldRatio'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageDomain'])) {
            $model->storageDomain = $map['StorageDomain'];
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
