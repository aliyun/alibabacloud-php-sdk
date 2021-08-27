<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageCluster\dedicatedBlockStorageClusterCapacity;
use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageCluster extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterName;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @var dedicatedBlockStorageClusterCapacity
     */
    public $dedicatedBlockStorageClusterCapacity;
    protected $_name = [
        'status'                               => 'Status',
        'performanceLevel'                     => 'PerformanceLevel',
        'description'                          => 'Description',
        'expiredTime'                          => 'ExpiredTime',
        'createTime'                           => 'CreateTime',
        'zoneId'                               => 'ZoneId',
        'category'                             => 'Category',
        'dedicatedBlockStorageClusterName'     => 'DedicatedBlockStorageClusterName',
        'dedicatedBlockStorageClusterId'       => 'DedicatedBlockStorageClusterId',
        'dedicatedBlockStorageClusterCapacity' => 'DedicatedBlockStorageClusterCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dedicatedBlockStorageClusterName) {
            $res['DedicatedBlockStorageClusterName'] = $this->dedicatedBlockStorageClusterName;
        }
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
        }
        if (null !== $this->dedicatedBlockStorageClusterCapacity) {
            $res['DedicatedBlockStorageClusterCapacity'] = null !== $this->dedicatedBlockStorageClusterCapacity ? $this->dedicatedBlockStorageClusterCapacity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedBlockStorageCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DedicatedBlockStorageClusterName'])) {
            $model->dedicatedBlockStorageClusterName = $map['DedicatedBlockStorageClusterName'];
        }
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
        }
        if (isset($map['DedicatedBlockStorageClusterCapacity'])) {
            $model->dedicatedBlockStorageClusterCapacity = dedicatedBlockStorageClusterCapacity::fromMap($map['DedicatedBlockStorageClusterCapacity']);
        }

        return $model;
    }
}
