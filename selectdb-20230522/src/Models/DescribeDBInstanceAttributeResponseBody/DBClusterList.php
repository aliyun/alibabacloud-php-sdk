<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class DBClusterList extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $cacheStorageSizeGB;

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
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 8
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @example 2023-08-14T09:24:13Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $dbClusterClass;

    /**
     * @example selectdb-cn-h033cjs****-be
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @example test01
     *
     * @var string
     */
    public $dbClusterName;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @example 64
     *
     * @var int
     */
    public $memory;

    /**
     * @example 0
     *
     * @var int
     */
    public $objectStoreSizeGiB;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 2023-08-14T09:24:13Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cacheStorageSizeGB'  => 'CacheStorageSizeGB',
        'cacheStorageSizeGiB' => 'CacheStorageSizeGiB',
        'cacheStorageType'    => 'CacheStorageType',
        'chargeType'          => 'ChargeType',
        'cpuCores'            => 'CpuCores',
        'createdTime'         => 'CreatedTime',
        'dbClusterClass'      => 'DbClusterClass',
        'dbClusterId'         => 'DbClusterId',
        'dbClusterName'       => 'DbClusterName',
        'dbInstanceName'      => 'DbInstanceName',
        'memory'              => 'Memory',
        'objectStoreSizeGiB'  => 'ObjectStoreSizeGiB',
        'performanceLevel'    => 'PerformanceLevel',
        'startTime'           => 'StartTime',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheStorageSizeGB) {
            $res['CacheStorageSizeGB'] = $this->cacheStorageSizeGB;
        }
        if (null !== $this->cacheStorageSizeGiB) {
            $res['CacheStorageSizeGiB'] = $this->cacheStorageSizeGiB;
        }
        if (null !== $this->cacheStorageType) {
            $res['CacheStorageType'] = $this->cacheStorageType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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
        if (null !== $this->objectStoreSizeGiB) {
            $res['ObjectStoreSizeGiB'] = $this->objectStoreSizeGiB;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CacheStorageSizeGiB'])) {
            $model->cacheStorageSizeGiB = $map['CacheStorageSizeGiB'];
        }
        if (isset($map['CacheStorageType'])) {
            $model->cacheStorageType = $map['CacheStorageType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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
        if (isset($map['ObjectStoreSizeGiB'])) {
            $model->objectStoreSizeGiB = $map['ObjectStoreSizeGiB'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
