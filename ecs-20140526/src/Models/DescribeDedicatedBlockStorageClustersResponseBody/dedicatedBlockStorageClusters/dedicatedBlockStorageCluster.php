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
    public $status;

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
        'status'                               => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return dedicatedBlockStorageCluster
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
