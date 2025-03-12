<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants\backupSets;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants\timeIntervalList;
use AlibabaCloud\Tea\Model;

class tenants extends Model
{
    /**
     * @description The name of the backup directory.
     *
     * @example backup
     *
     * @var string
     */
    public $backupBucketName;

    /**
     * @description The list of backup sets.
     *
     * @var backupSets[]
     */
    public $backupSets;

    /**
     * @description The ID of the cluster.
     *
     * @example objnf3b2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example testCluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The number of CPU cores.
     *
     * @example 1
     *
     * @var int
     */
    public $cpuNum;

    /**
     * @description The size of memory for the tenant.
     *
     * @example 100
     *
     * @var int
     */
    public $memoryNum;

    /**
     * @description The backup method.
     *
     * @example logical
     *
     * @var string
     */
    public $method;

    /**
     * @description The version of the OceanBase Database RPM package.
     *
     * @example 3.2.3.1-2022080510****
     *
     * @var string
     */
    public $obRpmVersion;

    /**
     * @description The ID of the tenant.
     *
     * @example tvd43v****
     *
     * @var string
     */
    public $obTenantId;

    /**
     * @description The major version of OceanBase Database.
     *
     * @example 3.2.3.1
     *
     * @var string
     */
    public $obVersion;

    /**
     * @description The region of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The alias of the tenant.
     *
     * @example aaa
     *
     * @var string
     */
    public $tenantAlias;

    /**
     * @description The remaining validity period, in days, of the backup data of the tenant.
     *
     * @example 7
     *
     * @var int
     */
    public $tenantDataBackupRemainDays;

    /**
     * @description The ID of the tenant.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The mode of the tenant.
     *
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     *
     * @example sbtest1
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The list of restorable periods of the tenant.
     *
     * @var timeIntervalList[]
     */
    public $timeIntervalList;

    /**
     * @description The number of nodes of the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $unitNum;

    /**
     * @description The size of disk space for the tenant.
     *
     * @example 50
     *
     * @var int
     */
    public $usedDisk;
    protected $_name = [
        'backupBucketName'           => 'BackupBucketName',
        'backupSets'                 => 'BackupSets',
        'clusterId'                  => 'ClusterId',
        'clusterName'                => 'ClusterName',
        'cpuNum'                     => 'CpuNum',
        'memoryNum'                  => 'MemoryNum',
        'method'                     => 'Method',
        'obRpmVersion'               => 'ObRpmVersion',
        'obTenantId'                 => 'ObTenantId',
        'obVersion'                  => 'ObVersion',
        'sourceRegion'               => 'SourceRegion',
        'tenantAlias'                => 'TenantAlias',
        'tenantDataBackupRemainDays' => 'TenantDataBackupRemainDays',
        'tenantId'                   => 'TenantId',
        'tenantMode'                 => 'TenantMode',
        'tenantName'                 => 'TenantName',
        'timeIntervalList'           => 'TimeIntervalList',
        'unitNum'                    => 'UnitNum',
        'usedDisk'                   => 'UsedDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupBucketName) {
            $res['BackupBucketName'] = $this->backupBucketName;
        }
        if (null !== $this->backupSets) {
            $res['BackupSets'] = [];
            if (null !== $this->backupSets && \is_array($this->backupSets)) {
                $n = 0;
                foreach ($this->backupSets as $item) {
                    $res['BackupSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->cpuNum) {
            $res['CpuNum'] = $this->cpuNum;
        }
        if (null !== $this->memoryNum) {
            $res['MemoryNum'] = $this->memoryNum;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->obRpmVersion) {
            $res['ObRpmVersion'] = $this->obRpmVersion;
        }
        if (null !== $this->obTenantId) {
            $res['ObTenantId'] = $this->obTenantId;
        }
        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->tenantAlias) {
            $res['TenantAlias'] = $this->tenantAlias;
        }
        if (null !== $this->tenantDataBackupRemainDays) {
            $res['TenantDataBackupRemainDays'] = $this->tenantDataBackupRemainDays;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->timeIntervalList) {
            $res['TimeIntervalList'] = [];
            if (null !== $this->timeIntervalList && \is_array($this->timeIntervalList)) {
                $n = 0;
                foreach ($this->timeIntervalList as $item) {
                    $res['TimeIntervalList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }
        if (null !== $this->usedDisk) {
            $res['UsedDisk'] = $this->usedDisk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupBucketName'])) {
            $model->backupBucketName = $map['BackupBucketName'];
        }
        if (isset($map['BackupSets'])) {
            if (!empty($map['BackupSets'])) {
                $model->backupSets = [];
                $n                 = 0;
                foreach ($map['BackupSets'] as $item) {
                    $model->backupSets[$n++] = null !== $item ? backupSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CpuNum'])) {
            $model->cpuNum = $map['CpuNum'];
        }
        if (isset($map['MemoryNum'])) {
            $model->memoryNum = $map['MemoryNum'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['ObRpmVersion'])) {
            $model->obRpmVersion = $map['ObRpmVersion'];
        }
        if (isset($map['ObTenantId'])) {
            $model->obTenantId = $map['ObTenantId'];
        }
        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['TenantAlias'])) {
            $model->tenantAlias = $map['TenantAlias'];
        }
        if (isset($map['TenantDataBackupRemainDays'])) {
            $model->tenantDataBackupRemainDays = $map['TenantDataBackupRemainDays'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TimeIntervalList'])) {
            if (!empty($map['TimeIntervalList'])) {
                $model->timeIntervalList = [];
                $n                       = 0;
                foreach ($map['TimeIntervalList'] as $item) {
                    $model->timeIntervalList[$n++] = null !== $item ? timeIntervalList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }
        if (isset($map['UsedDisk'])) {
            $model->usedDisk = $map['UsedDisk'];
        }

        return $model;
    }
}
