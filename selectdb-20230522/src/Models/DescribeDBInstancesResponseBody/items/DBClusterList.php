<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBClusterList extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $cacheStorageSizeGiB;

    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $cacheStorageType;

    /**
     * @example 8
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @example 2023-08-12T04:14Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example selectdb.4xlarge
     *
     * @var string
     */
    public $dbClusterClass;

    /**
     * @example selectdb-xxx8****-be
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @example default_cluster
     *
     * @var string
     */
    public $dbClusterName;

    /**
     * @example 64
     *
     * @var int
     */
    public $memory;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example RESOURCE_CHANGING
     *
     * @var string
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $objectStoreSizeGiB;
    protected $_name = [
        'cacheStorageSizeGiB' => 'CacheStorageSizeGiB',
        'cacheStorageType'    => 'CacheStorageType',
        'cpuCores'            => 'CpuCores',
        'createdTime'         => 'CreatedTime',
        'DBInstanceId'        => 'DBInstanceId',
        'dbClusterClass'      => 'DbClusterClass',
        'dbClusterId'         => 'DbClusterId',
        'dbClusterName'       => 'DbClusterName',
        'memory'              => 'Memory',
        'performanceLevel'    => 'PerformanceLevel',
        'status'              => 'Status',
        'objectStoreSizeGiB'  => 'objectStoreSizeGiB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheStorageSizeGiB) {
            $res['CacheStorageSizeGiB'] = $this->cacheStorageSizeGiB;
        }
        if (null !== $this->cacheStorageType) {
            $res['CacheStorageType'] = $this->cacheStorageType;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->objectStoreSizeGiB) {
            $res['objectStoreSizeGiB'] = $this->objectStoreSizeGiB;
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
        if (isset($map['CacheStorageSizeGiB'])) {
            $model->cacheStorageSizeGiB = $map['CacheStorageSizeGiB'];
        }
        if (isset($map['CacheStorageType'])) {
            $model->cacheStorageType = $map['CacheStorageType'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['objectStoreSizeGiB'])) {
            $model->objectStoreSizeGiB = $map['objectStoreSizeGiB'];
        }

        return $model;
    }
}
