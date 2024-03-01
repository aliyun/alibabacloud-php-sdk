<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceGroupList extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @var bool
     */
    public $enableSpot;

    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $maxClusterCount;

    /**
     * @description The maximum amount of reserved computing resources. Unit: ACUs.
     *
     * @example 128ACU
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $minClusterCount;

    /**
     * @description The minimum amount of reserved computing resources. Unit: ACUs.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $minComputeResource;

    /**
     * @description The resource group ID.
     *
     * @example 17
     *
     * @var int
     */
    public $poolId;

    /**
     * @description The name of the resource group.
     *
     * @example testadb
     *
     * @var string
     */
    public $poolName;

    /**
     * @description The type of the resource group.
     *
     * @example interactive
     *
     * @var string
     */
    public $poolType;

    /**
     * @description The user of the resource group.
     *
     * @example user1
     *
     * @var string
     */
    public $poolUsers;

    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $runningClusterCount;

    /**
     * @description The state of the resource group. Valid values:
     *
     *   **running**
     *   **deleting**
     *   **scaling**
     *
     * @example running
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourceGroupList
     */
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
