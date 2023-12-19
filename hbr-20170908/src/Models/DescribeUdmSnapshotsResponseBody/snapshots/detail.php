<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody\snapshots;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The consistency level.
     *
     * @example CRASH
     *
     * @var string
     */
    public $consistentLevel;

    /**
     * @description Indicates whether the system disk is included.
     *
     * @example true
     *
     * @var bool
     */
    public $containOsDisk;

    /**
     * @description The type of the source disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The name of the disk.
     *
     * @example /dev/xvdb
     *
     * @var string
     */
    public $diskDevName;

    /**
     * @description The mapping between the device and the recovery point ID.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $diskHbrSnapshotIdWithDeviceMap;

    /**
     * @description The IDs of the disks that are backed up at the recovery point.
     *
     * @var string[]
     */
    public $diskIdList;

    /**
     * @description The reason for the downgrade.
     *
     * @example HBR.NoRamRoleBound
     *
     * @var string
     */
    public $downgradeReason;

    /**
     * @description The hostname.
     *
     * @example iZbpxxxxxxxxxxxxxxxxe2Z
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The mapping between the instance ID and the disk ID.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $instanceIdWithDiskIdListMap;

    /**
     * @description The name of the instance.
     *
     * @example swh-hbr
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The specifications of the source instance.
     *
     * @example ecs.c6.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether the backup is created by the instant clone feature.
     *
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The list of snapshot IDs, corresponding to DiskIdList.
     *
     * @var string[]
     */
    public $nativeSnapshotIdList;

    /**
     * @description The ID of the system disk.
     *
     * @example d-bp1e6427vhd320hifvc
     *
     * @var string
     */
    public $osDiskId;

    /**
     * @description The name of the operating system.
     *
     * @example Debian 10.10 64-bit (UEFI)
     *
     * @var string
     */
    public $osName;

    /**
     * @description The English name of the operating system.
     *
     * @example Debian  11.1 64 bit
     *
     * @var string
     */
    public $osNameEn;

    /**
     * @description The type of the operating system. Valid values: linux and windows.
     *
     * @example windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The performance level of the source disk.
     *
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The system platform.
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the snapshot group.
     *
     * @example ssg-uf6856txcaq31uj***
     *
     * @var string
     */
    public $snapshotGroupId;

    /**
     * @description Indicates whether the disk is a system disk.
     *
     * @example true
     *
     * @var bool
     */
    public $systemDisk;

    /**
     * @description The name of the instance.
     *
     * @example BNSHSVR42 IPGUARD
     *
     * @var string
     */
    public $vmName;
    protected $_name = [
        'consistentLevel'                => 'ConsistentLevel',
        'containOsDisk'                  => 'ContainOsDisk',
        'diskCategory'                   => 'DiskCategory',
        'diskDevName'                    => 'DiskDevName',
        'diskHbrSnapshotIdWithDeviceMap' => 'DiskHbrSnapshotIdWithDeviceMap',
        'diskIdList'                     => 'DiskIdList',
        'downgradeReason'                => 'DowngradeReason',
        'hostName'                       => 'HostName',
        'instanceIdWithDiskIdListMap'    => 'InstanceIdWithDiskIdListMap',
        'instanceName'                   => 'InstanceName',
        'instanceType'                   => 'InstanceType',
        'instantAccess'                  => 'InstantAccess',
        'nativeSnapshotIdList'           => 'NativeSnapshotIdList',
        'osDiskId'                       => 'OsDiskId',
        'osName'                         => 'OsName',
        'osNameEn'                       => 'OsNameEn',
        'osType'                         => 'OsType',
        'performanceLevel'               => 'PerformanceLevel',
        'platform'                       => 'Platform',
        'snapshotGroupId'                => 'SnapshotGroupId',
        'systemDisk'                     => 'SystemDisk',
        'vmName'                         => 'VmName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['DiskHbrSnapshotIdWithDeviceMap'] = $this->diskHbrSnapshotIdWithDeviceMap;
        }
        if (null !== $this->diskIdList) {
            $res['DiskIdList'] = $this->diskIdList;
        }
        if (null !== $this->downgradeReason) {
            $res['DowngradeReason'] = $this->downgradeReason;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceIdWithDiskIdListMap) {
            $res['InstanceIdWithDiskIdListMap'] = $this->instanceIdWithDiskIdListMap;
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
            $res['NativeSnapshotIdList'] = $this->nativeSnapshotIdList;
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

    /**
     * @param array $map
     *
     * @return detail
     */
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
            $model->diskHbrSnapshotIdWithDeviceMap = $map['DiskHbrSnapshotIdWithDeviceMap'];
        }
        if (isset($map['DiskIdList'])) {
            if (!empty($map['DiskIdList'])) {
                $model->diskIdList = $map['DiskIdList'];
            }
        }
        if (isset($map['DowngradeReason'])) {
            $model->downgradeReason = $map['DowngradeReason'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceIdWithDiskIdListMap'])) {
            $model->instanceIdWithDiskIdListMap = $map['InstanceIdWithDiskIdListMap'];
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
                $model->nativeSnapshotIdList = $map['NativeSnapshotIdList'];
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
