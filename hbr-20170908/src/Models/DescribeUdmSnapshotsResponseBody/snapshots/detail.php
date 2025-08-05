<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody\snapshots;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $consistentLevel;

    /**
     * @var bool
     */
    public $containOsDisk;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $diskDevName;

    /**
     * @var mixed[]
     */
    public $diskHbrSnapshotIdWithDeviceMap;

    /**
     * @var string[]
     */
    public $diskIdList;

    /**
     * @var string
     */
    public $downgradeReason;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var mixed[]
     */
    public $instanceIdWithDiskIdListMap;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var string[]
     */
    public $nativeSnapshotIdList;

    /**
     * @var string
     */
    public $osDiskId;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $osNameEn;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $snapshotGroupId;

    /**
     * @var bool
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $vmName;
    protected $_name = [
        'consistentLevel' => 'ConsistentLevel',
        'containOsDisk' => 'ContainOsDisk',
        'diskCategory' => 'DiskCategory',
        'diskDevName' => 'DiskDevName',
        'diskHbrSnapshotIdWithDeviceMap' => 'DiskHbrSnapshotIdWithDeviceMap',
        'diskIdList' => 'DiskIdList',
        'downgradeReason' => 'DowngradeReason',
        'hostName' => 'HostName',
        'instanceIdWithDiskIdListMap' => 'InstanceIdWithDiskIdListMap',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'instantAccess' => 'InstantAccess',
        'nativeSnapshotIdList' => 'NativeSnapshotIdList',
        'osDiskId' => 'OsDiskId',
        'osName' => 'OsName',
        'osNameEn' => 'OsNameEn',
        'osType' => 'OsType',
        'performanceLevel' => 'PerformanceLevel',
        'platform' => 'Platform',
        'snapshotGroupId' => 'SnapshotGroupId',
        'systemDisk' => 'SystemDisk',
        'vmName' => 'VmName',
    ];

    public function validate()
    {
        if (\is_array($this->diskHbrSnapshotIdWithDeviceMap)) {
            Model::validateArray($this->diskHbrSnapshotIdWithDeviceMap);
        }
        if (\is_array($this->diskIdList)) {
            Model::validateArray($this->diskIdList);
        }
        if (\is_array($this->instanceIdWithDiskIdListMap)) {
            Model::validateArray($this->instanceIdWithDiskIdListMap);
        }
        if (\is_array($this->nativeSnapshotIdList)) {
            Model::validateArray($this->nativeSnapshotIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consistentLevel) {
            $res['ConsistentLevel'] = $this->consistentLevel;
        }

        if (null !== $this->containOsDisk) {
            $res['ContainOsDisk'] = $this->containOsDisk;
        }

        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        if (null !== $this->diskDevName) {
            $res['DiskDevName'] = $this->diskDevName;
        }

        if (null !== $this->diskHbrSnapshotIdWithDeviceMap) {
            if (\is_array($this->diskHbrSnapshotIdWithDeviceMap)) {
                $res['DiskHbrSnapshotIdWithDeviceMap'] = [];
                foreach ($this->diskHbrSnapshotIdWithDeviceMap as $key1 => $value1) {
                    $res['DiskHbrSnapshotIdWithDeviceMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->diskIdList) {
            if (\is_array($this->diskIdList)) {
                $res['DiskIdList'] = [];
                $n1 = 0;
                foreach ($this->diskIdList as $item1) {
                    $res['DiskIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->downgradeReason) {
            $res['DowngradeReason'] = $this->downgradeReason;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->instanceIdWithDiskIdListMap) {
            if (\is_array($this->instanceIdWithDiskIdListMap)) {
                $res['InstanceIdWithDiskIdListMap'] = [];
                foreach ($this->instanceIdWithDiskIdListMap as $key1 => $value1) {
                    $res['InstanceIdWithDiskIdListMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }

        if (null !== $this->nativeSnapshotIdList) {
            if (\is_array($this->nativeSnapshotIdList)) {
                $res['NativeSnapshotIdList'] = [];
                $n1 = 0;
                foreach ($this->nativeSnapshotIdList as $item1) {
                    $res['NativeSnapshotIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->osDiskId) {
            $res['OsDiskId'] = $this->osDiskId;
        }

        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }

        if (null !== $this->osNameEn) {
            $res['OsNameEn'] = $this->osNameEn;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->snapshotGroupId) {
            $res['SnapshotGroupId'] = $this->snapshotGroupId;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = $this->systemDisk;
        }

        if (null !== $this->vmName) {
            $res['VmName'] = $this->vmName;
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
        if (isset($map['ConsistentLevel'])) {
            $model->consistentLevel = $map['ConsistentLevel'];
        }

        if (isset($map['ContainOsDisk'])) {
            $model->containOsDisk = $map['ContainOsDisk'];
        }

        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        if (isset($map['DiskDevName'])) {
            $model->diskDevName = $map['DiskDevName'];
        }

        if (isset($map['DiskHbrSnapshotIdWithDeviceMap'])) {
            if (!empty($map['DiskHbrSnapshotIdWithDeviceMap'])) {
                $model->diskHbrSnapshotIdWithDeviceMap = [];
                foreach ($map['DiskHbrSnapshotIdWithDeviceMap'] as $key1 => $value1) {
                    $model->diskHbrSnapshotIdWithDeviceMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['DiskIdList'])) {
            if (!empty($map['DiskIdList'])) {
                $model->diskIdList = [];
                $n1 = 0;
                foreach ($map['DiskIdList'] as $item1) {
                    $model->diskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DowngradeReason'])) {
            $model->downgradeReason = $map['DowngradeReason'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['InstanceIdWithDiskIdListMap'])) {
            if (!empty($map['InstanceIdWithDiskIdListMap'])) {
                $model->instanceIdWithDiskIdListMap = [];
                foreach ($map['InstanceIdWithDiskIdListMap'] as $key1 => $value1) {
                    $model->instanceIdWithDiskIdListMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }

        if (isset($map['NativeSnapshotIdList'])) {
            if (!empty($map['NativeSnapshotIdList'])) {
                $model->nativeSnapshotIdList = [];
                $n1 = 0;
                foreach ($map['NativeSnapshotIdList'] as $item1) {
                    $model->nativeSnapshotIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OsDiskId'])) {
            $model->osDiskId = $map['OsDiskId'];
        }

        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }

        if (isset($map['OsNameEn'])) {
            $model->osNameEn = $map['OsNameEn'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SnapshotGroupId'])) {
            $model->snapshotGroupId = $map['SnapshotGroupId'];
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = $map['SystemDisk'];
        }

        if (isset($map['VmName'])) {
            $model->vmName = $map['VmName'];
        }

        return $model;
    }
}
