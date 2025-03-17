<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\appInstanceGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\desktopGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\officeSites;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @description > This parameter is not publicly available.
     *
     * @var bool
     */
    public $allowOperateUserDrive;

    /**
     * @description The array of the app steaming delivery groups bound with UPM-supported NAS.
     *
     * @var appInstanceGroups[]
     */
    public $appInstanceGroups;

    /**
     * @description The total capacity of the NAS file system. Unit: GiB.
     *
     *   The Capacity type has 10 PiB of storage, which is equal to 10,485,760 GiB.
     *   The Performance type has 1 PiB of storage, which is equal to 1,048,576 GiB.
     *
     * @example 10485760
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The time when the NAS file system was created.
     *
     * @example 2021-05-10T11:39Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the NAS file system.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The desktop groups that are associated with the NAS file systems that support the UPM feature.
     *
     * @var desktopGroups[]
     */
    public $desktopGroups;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $encryptionEnabled;

    /**
     * @description The ID of the NAS file system.
     *
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The name of the NAS file system.
     *
     * @example testNAS
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @description The status of the NAS file system. The possible values include:
     *
     *   Pending: The NAS file system is being created.
     *   Running: The NAS file system is running.
     *   Stopped: The NAS file system is stopped.
     *   Deleting: The NAS file system is being deleted.
     *   Deleted: The NAS file system is deleted.
     *   Invalid: The NAS file system is invalid.
     *
     * @example Running
     *
     * @var string
     */
    public $fileSystemStatus;

    /**
     * @description The type of the NAS file system. Valid value: Universal NAS. This value indicates that the NAS file system is a General-purpose one.
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The used storage of the NAS file system. Unit: byte.
     *
     * @example 0
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The domain name of the mount target.
     *
     * @example 04f314****-at***.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The status of the mount target. The possible values include:
     *
     *   Pending: The mount target is being created.
     *   Active: The mount target is enabled.
     *   Inactive: The mount target is disabled.
     *   Deleting: The mount target is being deleted.
     *   Invalid: The mount target is invalid.
     *
     * @example Active
     *
     * @var string
     */
    public $mountTargetStatus;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The array of office networks.
     *
     * @var officeSites[]
     */
    public $officeSites;

    /**
     * @description Indicates whether the User Profile Management (UPM) feature is supported.
     *
     * @example false
     *
     * @var bool
     */
    public $profileCompatible;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The storage type of the NAS file system. Valid values:
     *
     * - Upm: UPM NAS
     * - ShareNas: Shared NAS
     *
     * @example Upm
     *
     * @var string
     */
    public $scene;

    /**
     * @description The storage type of the NAS file system. Valid values:
     *
     *   Capacity
     *   Performance
     *
     * @example Capacity
     *
     * @var string
     */
    public $storageType;

    /**
     * @description Indicates whether the Server Message Block (SMB) access control list (ACL) feature was enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $supportAcl;

    /**
     * @description The ID of the zone where the NAS file system resides.
     *
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowOperateUserDrive' => 'AllowOperateUserDrive',
        'appInstanceGroups' => 'AppInstanceGroups',
        'capacity' => 'Capacity',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'desktopGroups' => 'DesktopGroups',
        'encryptionEnabled' => 'EncryptionEnabled',
        'fileSystemId' => 'FileSystemId',
        'fileSystemName' => 'FileSystemName',
        'fileSystemStatus' => 'FileSystemStatus',
        'fileSystemType' => 'FileSystemType',
        'meteredSize' => 'MeteredSize',
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetStatus' => 'MountTargetStatus',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSites' => 'OfficeSites',
        'profileCompatible' => 'ProfileCompatible',
        'regionId' => 'RegionId',
        'scene' => 'Scene',
        'storageType' => 'StorageType',
        'supportAcl' => 'SupportAcl',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowOperateUserDrive) {
            $res['AllowOperateUserDrive'] = $this->allowOperateUserDrive;
        }
        if (null !== $this->appInstanceGroups) {
            $res['AppInstanceGroups'] = [];
            if (null !== $this->appInstanceGroups && \is_array($this->appInstanceGroups)) {
                $n = 0;
                foreach ($this->appInstanceGroups as $item) {
                    $res['AppInstanceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopGroups) {
            $res['DesktopGroups'] = [];
            if (null !== $this->desktopGroups && \is_array($this->desktopGroups)) {
                $n = 0;
                foreach ($this->desktopGroups as $item) {
                    $res['DesktopGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->encryptionEnabled) {
            $res['EncryptionEnabled'] = $this->encryptionEnabled;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->fileSystemStatus) {
            $res['FileSystemStatus'] = $this->fileSystemStatus;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->mountTargetStatus) {
            $res['MountTargetStatus'] = $this->mountTargetStatus;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSites) {
            $res['OfficeSites'] = [];
            if (null !== $this->officeSites && \is_array($this->officeSites)) {
                $n = 0;
                foreach ($this->officeSites as $item) {
                    $res['OfficeSites'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->profileCompatible) {
            $res['ProfileCompatible'] = $this->profileCompatible;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->supportAcl) {
            $res['SupportAcl'] = $this->supportAcl;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowOperateUserDrive'])) {
            $model->allowOperateUserDrive = $map['AllowOperateUserDrive'];
        }
        if (isset($map['AppInstanceGroups'])) {
            if (!empty($map['AppInstanceGroups'])) {
                $model->appInstanceGroups = [];
                $n = 0;
                foreach ($map['AppInstanceGroups'] as $item) {
                    $model->appInstanceGroups[$n++] = null !== $item ? appInstanceGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopGroups'])) {
            if (!empty($map['DesktopGroups'])) {
                $model->desktopGroups = [];
                $n = 0;
                foreach ($map['DesktopGroups'] as $item) {
                    $model->desktopGroups[$n++] = null !== $item ? desktopGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EncryptionEnabled'])) {
            $model->encryptionEnabled = $map['EncryptionEnabled'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['FileSystemStatus'])) {
            $model->fileSystemStatus = $map['FileSystemStatus'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['MountTargetStatus'])) {
            $model->mountTargetStatus = $map['MountTargetStatus'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSites'])) {
            if (!empty($map['OfficeSites'])) {
                $model->officeSites = [];
                $n = 0;
                foreach ($map['OfficeSites'] as $item) {
                    $model->officeSites[$n++] = null !== $item ? officeSites::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProfileCompatible'])) {
            $model->profileCompatible = $map['ProfileCompatible'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SupportAcl'])) {
            $model->supportAcl = $map['SupportAcl'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
