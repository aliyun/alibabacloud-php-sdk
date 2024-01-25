<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\SingleOrderResponseBody;

use AlibabaCloud\SDK\Cdp\V20210402\Models\SingleOrderResponseBody\data\ecsGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $clusterSize;

    /**
     * @var int
     */
    public $clusterStatus;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var ecsGroupList[]
     */
    public $ecsGroupList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'clusterSize'   => 'ClusterSize',
        'clusterStatus' => 'ClusterStatus',
        'deployMode'    => 'DeployMode',
        'duration'      => 'Duration',
        'ecsGroupList'  => 'EcsGroupList',
        'instanceId'    => 'InstanceId',
        'orderId'       => 'OrderId',
        'packageType'   => 'PackageType',
        'pricingCycle'  => 'PricingCycle',
        'storageSize'   => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterSize) {
            $res['ClusterSize'] = $this->clusterSize;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ecsGroupList) {
            $res['EcsGroupList'] = [];
            if (null !== $this->ecsGroupList && \is_array($this->ecsGroupList)) {
                $n = 0;
                foreach ($this->ecsGroupList as $item) {
                    $res['EcsGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterSize'])) {
            $model->clusterSize = $map['ClusterSize'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EcsGroupList'])) {
            if (!empty($map['EcsGroupList'])) {
                $model->ecsGroupList = [];
                $n                   = 0;
                foreach ($map['EcsGroupList'] as $item) {
                    $model->ecsGroupList[$n++] = null !== $item ? ecsGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
