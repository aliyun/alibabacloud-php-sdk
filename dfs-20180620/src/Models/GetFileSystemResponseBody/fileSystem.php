<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\GetFileSystemResponseBody;

use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemName;

    /**
     * @var float
     */
    public $meteringSpaceSize;

    /**
     * @var int
     */
    public $mountPointCount;

    /**
     * @var int
     */
    public $numberOfDirectories;

    /**
     * @var int
     */
    public $numberOfFiles;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $provisionedThroughputInMiBps;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $spaceCapacity;

    /**
     * @var string
     */
    public $storagePackageId;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $throughputMode;

    /**
     * @var float
     */
    public $usedSpaceSize;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'                   => 'CreateTime',
        'description'                  => 'Description',
        'fileSystemId'                 => 'FileSystemId',
        'fileSystemName'               => 'FileSystemName',
        'meteringSpaceSize'            => 'MeteringSpaceSize',
        'mountPointCount'              => 'MountPointCount',
        'numberOfDirectories'          => 'NumberOfDirectories',
        'numberOfFiles'                => 'NumberOfFiles',
        'protocolType'                 => 'ProtocolType',
        'provisionedThroughputInMiBps' => 'ProvisionedThroughputInMiBps',
        'regionId'                     => 'RegionId',
        'spaceCapacity'                => 'SpaceCapacity',
        'storagePackageId'             => 'StoragePackageId',
        'storageType'                  => 'StorageType',
        'throughputMode'               => 'ThroughputMode',
        'usedSpaceSize'                => 'UsedSpaceSize',
        'version'                      => 'Version',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->meteringSpaceSize) {
            $res['MeteringSpaceSize'] = $this->meteringSpaceSize;
        }
        if (null !== $this->mountPointCount) {
            $res['MountPointCount'] = $this->mountPointCount;
        }
        if (null !== $this->numberOfDirectories) {
            $res['NumberOfDirectories'] = $this->numberOfDirectories;
        }
        if (null !== $this->numberOfFiles) {
            $res['NumberOfFiles'] = $this->numberOfFiles;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->provisionedThroughputInMiBps) {
            $res['ProvisionedThroughputInMiBps'] = $this->provisionedThroughputInMiBps;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spaceCapacity) {
            $res['SpaceCapacity'] = $this->spaceCapacity;
        }
        if (null !== $this->storagePackageId) {
            $res['StoragePackageId'] = $this->storagePackageId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->throughputMode) {
            $res['ThroughputMode'] = $this->throughputMode;
        }
        if (null !== $this->usedSpaceSize) {
            $res['UsedSpaceSize'] = $this->usedSpaceSize;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['MeteringSpaceSize'])) {
            $model->meteringSpaceSize = $map['MeteringSpaceSize'];
        }
        if (isset($map['MountPointCount'])) {
            $model->mountPointCount = $map['MountPointCount'];
        }
        if (isset($map['NumberOfDirectories'])) {
            $model->numberOfDirectories = $map['NumberOfDirectories'];
        }
        if (isset($map['NumberOfFiles'])) {
            $model->numberOfFiles = $map['NumberOfFiles'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ProvisionedThroughputInMiBps'])) {
            $model->provisionedThroughputInMiBps = $map['ProvisionedThroughputInMiBps'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SpaceCapacity'])) {
            $model->spaceCapacity = $map['SpaceCapacity'];
        }
        if (isset($map['StoragePackageId'])) {
            $model->storagePackageId = $map['StoragePackageId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ThroughputMode'])) {
            $model->throughputMode = $map['ThroughputMode'];
        }
        if (isset($map['UsedSpaceSize'])) {
            $model->usedSpaceSize = $map['UsedSpaceSize'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
