<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\appInstanceGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\desktopGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems\officeSites;

class fileSystems extends Model
{
    /**
     * @var bool
     */
    public $allowOperateUserDrive;

    /**
     * @var appInstanceGroups[]
     */
    public $appInstanceGroups;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var desktopGroups[]
     */
    public $desktopGroups;

    /**
     * @var bool
     */
    public $encryptionEnabled;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemName;

    /**
     * @var string
     */
    public $fileSystemStatus;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $mountTargetStatus;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var officeSites[]
     */
    public $officeSites;

    /**
     * @var bool
     */
    public $profileCompatible;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var bool
     */
    public $supportAcl;

    /**
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

    public function validate()
    {
        if (\is_array($this->appInstanceGroups)) {
            Model::validateArray($this->appInstanceGroups);
        }
        if (\is_array($this->desktopGroups)) {
            Model::validateArray($this->desktopGroups);
        }
        if (\is_array($this->officeSites)) {
            Model::validateArray($this->officeSites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowOperateUserDrive) {
            $res['AllowOperateUserDrive'] = $this->allowOperateUserDrive;
        }

        if (null !== $this->appInstanceGroups) {
            if (\is_array($this->appInstanceGroups)) {
                $res['AppInstanceGroups'] = [];
                $n1 = 0;
                foreach ($this->appInstanceGroups as $item1) {
                    $res['AppInstanceGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->desktopGroups)) {
                $res['DesktopGroups'] = [];
                $n1 = 0;
                foreach ($this->desktopGroups as $item1) {
                    $res['DesktopGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->officeSites)) {
                $res['OfficeSites'] = [];
                $n1 = 0;
                foreach ($this->officeSites as $item1) {
                    $res['OfficeSites'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowOperateUserDrive'])) {
            $model->allowOperateUserDrive = $map['AllowOperateUserDrive'];
        }

        if (isset($map['AppInstanceGroups'])) {
            if (!empty($map['AppInstanceGroups'])) {
                $model->appInstanceGroups = [];
                $n1 = 0;
                foreach ($map['AppInstanceGroups'] as $item1) {
                    $model->appInstanceGroups[$n1++] = appInstanceGroups::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['DesktopGroups'] as $item1) {
                    $model->desktopGroups[$n1++] = desktopGroups::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['OfficeSites'] as $item1) {
                    $model->officeSites[$n1++] = officeSites::fromMap($item1);
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
