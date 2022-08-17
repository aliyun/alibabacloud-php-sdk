<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageClusterCapacity;
use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusters extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dedicatedBlockStorageClusterCapacity
     */
    public $dedicatedBlockStorageClusterCapacity;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterName;

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
    public $performanceLevel;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supportedCategory;

    /**
     * @var string
     */
    public $type;

    /**
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
        'status'                               => 'Status',
        'supportedCategory'                    => 'SupportedCategory',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedCategory) {
            $res['SupportedCategory'] = $this->supportedCategory;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedCategory'])) {
            $model->supportedCategory = $map['SupportedCategory'];
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
