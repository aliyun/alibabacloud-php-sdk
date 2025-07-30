<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class DBClusterList extends Model
{
    /**
     * @description The cache size. Unit: GB.
     *
     * @example 200
     *
     * @var string
     */
    public $cacheStorageSizeGB;

    /**
     * @description The cache type.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $cacheStorageType;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterBinding;

    /**
     * @var int
     */
    public $clusterNodeCount;

    /**
     * @var string
     */
    public $clusterNodeType;

    /**
     * @description The number of CPU cores.
     *
     * @example 8
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2023-08-14T09:24:13Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The specifications of the cluster. Valid values:
     *
     *   **selectdb.xlarge**: 4 CPU cores and 32 GB of memory.
     *   **selectdb.2xlarge**: 8 CPU cores and 64 GB of memory.
     *   **selectdb.4xlarge**: 16 CPU cores and 128 GB of memory.
     *   **selectdb.8xlarge**: 32 CPU cores and 256 GB of memory.
     *   **selectdb.16xlarge**: 64 CPU cores and 512 GB of memory.
     *   **selectdb.24xlarge**: 96 CPU cores and 768 GB of memory.
     *   **selectdb.32xlarge**: 128 CPU cores and 1,024 GB of memory.
     *
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $dbClusterClass;

    /**
     * @description The ID of the cluster.
     *
     * @example selectdb-cn-h033cjs****-be
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @description The name of the cluster.
     *
     * @example test01
     *
     * @var string
     */
    public $dbClusterName;

    /**
     * @description The instance name.
     *
     * @example test instance
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @description The memory size.
     *
     * @example 64
     *
     * @var int
     */
    public $memory;

    /**
     * @description The modified time.
     *
     * @example 2024-07-02T16:35:44+08:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The performance level.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @var float
     */
    public $scaleMax;

    /**
     * @var float
     */
    public $scaleMin;

    /**
     * @var bool
     */
    public $scalingRulesEnable;

    /**
     * @description The time when the cluster started.
     *
     * @example 2023-08-14T09:24:13Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the cluster. Valid values:
     *
     *   **CREATING**: The cluster is being created.
     *   **ACTIVATION**: The cluster is running.
     *   **RESOURCE_CHANGING**: The resource configuration of the cluster is being changed.
     *   **ORDER_PREPARING**: The order is being confirmed.
     *   **READONLY_RESOURCE_CHANGING**: The resource configuration of the cluster is being changed and the cluster is write-locked.
     *   **DELETING**: The cluster is being deleted.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cacheStorageSizeGB' => 'CacheStorageSizeGB',
        'cacheStorageType' => 'CacheStorageType',
        'chargeType' => 'ChargeType',
        'clusterBinding' => 'ClusterBinding',
        'clusterNodeCount' => 'ClusterNodeCount',
        'clusterNodeType' => 'ClusterNodeType',
        'cpuCores' => 'CpuCores',
        'createdTime' => 'CreatedTime',
        'dbClusterClass' => 'DbClusterClass',
        'dbClusterId' => 'DbClusterId',
        'dbClusterName' => 'DbClusterName',
        'dbInstanceName' => 'DbInstanceName',
        'memory' => 'Memory',
        'modifiedTime' => 'ModifiedTime',
        'performanceLevel' => 'PerformanceLevel',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'scalingRulesEnable' => 'ScalingRulesEnable',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'subDomain' => 'SubDomain',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheStorageSizeGB) {
            $res['CacheStorageSizeGB'] = $this->cacheStorageSizeGB;
        }
        if (null !== $this->cacheStorageType) {
            $res['CacheStorageType'] = $this->cacheStorageType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterBinding) {
            $res['ClusterBinding'] = $this->clusterBinding;
        }
        if (null !== $this->clusterNodeCount) {
            $res['ClusterNodeCount'] = $this->clusterNodeCount;
        }
        if (null !== $this->clusterNodeType) {
            $res['ClusterNodeType'] = $this->clusterNodeType;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dbClusterClass) {
            $res['DbClusterClass'] = $this->dbClusterClass;
        }
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }
        if (null !== $this->dbClusterName) {
            $res['DbClusterName'] = $this->dbClusterName;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scalingRulesEnable) {
            $res['ScalingRulesEnable'] = $this->scalingRulesEnable;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheStorageSizeGB'])) {
            $model->cacheStorageSizeGB = $map['CacheStorageSizeGB'];
        }
        if (isset($map['CacheStorageType'])) {
            $model->cacheStorageType = $map['CacheStorageType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterBinding'])) {
            $model->clusterBinding = $map['ClusterBinding'];
        }
        if (isset($map['ClusterNodeCount'])) {
            $model->clusterNodeCount = $map['ClusterNodeCount'];
        }
        if (isset($map['ClusterNodeType'])) {
            $model->clusterNodeType = $map['ClusterNodeType'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DbClusterClass'])) {
            $model->dbClusterClass = $map['DbClusterClass'];
        }
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }
        if (isset($map['DbClusterName'])) {
            $model->dbClusterName = $map['DbClusterName'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScalingRulesEnable'])) {
            $model->scalingRulesEnable = $map['ScalingRulesEnable'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
