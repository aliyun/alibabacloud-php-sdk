<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants\backupSets;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants\timeIntervalList;

class tenants extends Model
{
    /**
     * @var string
     */
    public $backupBucketName;

    /**
     * @var backupSets[]
     */
    public $backupSets;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $cpuNum;

    /**
     * @var int
     */
    public $memoryNum;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $obRpmVersion;

    /**
     * @var string
     */
    public $obTenantId;

    /**
     * @var string
     */
    public $obVersion;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $tenantAlias;

    /**
     * @var int
     */
    public $tenantDataBackupRemainDays;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantMode;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var timeIntervalList[]
     */
    public $timeIntervalList;

    /**
     * @var int
     */
    public $unitNum;

    /**
     * @var int
     */
    public $usedDisk;
    protected $_name = [
        'backupBucketName' => 'BackupBucketName',
        'backupSets' => 'BackupSets',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'cpuNum' => 'CpuNum',
        'memoryNum' => 'MemoryNum',
        'method' => 'Method',
        'obRpmVersion' => 'ObRpmVersion',
        'obTenantId' => 'ObTenantId',
        'obVersion' => 'ObVersion',
        'sourceRegion' => 'SourceRegion',
        'tenantAlias' => 'TenantAlias',
        'tenantDataBackupRemainDays' => 'TenantDataBackupRemainDays',
        'tenantId' => 'TenantId',
        'tenantMode' => 'TenantMode',
        'tenantName' => 'TenantName',
        'timeIntervalList' => 'TimeIntervalList',
        'unitNum' => 'UnitNum',
        'usedDisk' => 'UsedDisk',
    ];

    public function validate()
    {
        if (\is_array($this->backupSets)) {
            Model::validateArray($this->backupSets);
        }
        if (\is_array($this->timeIntervalList)) {
            Model::validateArray($this->timeIntervalList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupBucketName) {
            $res['BackupBucketName'] = $this->backupBucketName;
        }

        if (null !== $this->backupSets) {
            if (\is_array($this->backupSets)) {
                $res['BackupSets'] = [];
                $n1 = 0;
                foreach ($this->backupSets as $item1) {
                    $res['BackupSets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->timeIntervalList)) {
                $res['TimeIntervalList'] = [];
                $n1 = 0;
                foreach ($this->timeIntervalList as $item1) {
                    $res['TimeIntervalList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupBucketName'])) {
            $model->backupBucketName = $map['BackupBucketName'];
        }

        if (isset($map['BackupSets'])) {
            if (!empty($map['BackupSets'])) {
                $model->backupSets = [];
                $n1 = 0;
                foreach ($map['BackupSets'] as $item1) {
                    $model->backupSets[$n1++] = backupSets::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['TimeIntervalList'] as $item1) {
                    $model->timeIntervalList[$n1++] = timeIntervalList::fromMap($item1);
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
