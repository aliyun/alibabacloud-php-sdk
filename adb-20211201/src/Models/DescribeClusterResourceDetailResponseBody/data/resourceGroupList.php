<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class resourceGroupList extends Model
{
    /**
     * @var string
     */
    public $clusterMode;
    /**
     * @var string
     */
    public $clusterSizeResource;
    /**
     * @var bool
     */
    public $enableSpot;
    /**
     * @var int
     */
    public $maxClusterCount;
    /**
     * @var string
     */
    public $maxComputeResource;
    /**
     * @var int
     */
    public $minClusterCount;
    /**
     * @var string
     */
    public $minComputeResource;
    /**
     * @var int
     */
    public $poolId;
    /**
     * @var string
     */
    public $poolName;
    /**
     * @var string
     */
    public $poolType;
    /**
     * @var string
     */
    public $poolUsers;
    /**
     * @var int
     */
    public $runningClusterCount;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterMode'         => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'enableSpot'          => 'EnableSpot',
        'maxClusterCount'     => 'MaxClusterCount',
        'maxComputeResource'  => 'MaxComputeResource',
        'minClusterCount'     => 'MinClusterCount',
        'minComputeResource'  => 'MinComputeResource',
        'poolId'              => 'PoolId',
        'poolName'            => 'PoolName',
        'poolType'            => 'PoolType',
        'poolUsers'           => 'PoolUsers',
        'runningClusterCount' => 'RunningClusterCount',
        'status'              => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }

        if (null !== $this->enableSpot) {
            $res['EnableSpot'] = $this->enableSpot;
        }

        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }

        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }

        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }

        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }

        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }

        if (null !== $this->poolType) {
            $res['PoolType'] = $this->poolType;
        }

        if (null !== $this->poolUsers) {
            $res['PoolUsers'] = $this->poolUsers;
        }

        if (null !== $this->runningClusterCount) {
            $res['RunningClusterCount'] = $this->runningClusterCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }

        if (isset($map['EnableSpot'])) {
            $model->enableSpot = $map['EnableSpot'];
        }

        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }

        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }

        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }

        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }

        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }

        if (isset($map['PoolType'])) {
            $model->poolType = $map['PoolType'];
        }

        if (isset($map['PoolUsers'])) {
            $model->poolUsers = $map['PoolUsers'];
        }

        if (isset($map['RunningClusterCount'])) {
            $model->runningClusterCount = $map['RunningClusterCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
