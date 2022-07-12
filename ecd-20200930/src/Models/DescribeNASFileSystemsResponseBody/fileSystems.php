<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody;

use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
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
     * @var string
     */
    public $regionId;

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
        'capacity'          => 'Capacity',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'encryptionEnabled' => 'EncryptionEnabled',
        'fileSystemId'      => 'FileSystemId',
        'fileSystemName'    => 'FileSystemName',
        'fileSystemStatus'  => 'FileSystemStatus',
        'fileSystemType'    => 'FileSystemType',
        'meteredSize'       => 'MeteredSize',
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetStatus' => 'MountTargetStatus',
        'officeSiteId'      => 'OfficeSiteId',
        'officeSiteName'    => 'OfficeSiteName',
        'regionId'          => 'RegionId',
        'storageType'       => 'StorageType',
        'supportAcl'        => 'SupportAcl',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
