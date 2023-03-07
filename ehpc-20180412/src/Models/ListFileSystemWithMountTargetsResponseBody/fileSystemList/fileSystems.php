<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\mountTargetList;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @description The bandwidth of the file system. Unit: MB/s.
     *
     * @example 150
     *
     * @var int
     */
    public $bandWidth;

    /**
     * @description The capacity of the file system. Unit: GiB.
     *
     * @example 5120
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The time when the file system was created.
     *
     * @example 2018-07-26 16:36:27
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the file system.
     *
     * @example FilesDescription
     *
     * @var string
     */
    public $destription;

    /**
     * @description Indicates whether the file system is encrypted. Valid values:
     *
     *   0: The file system is not encrypted.
     *   1: The file system is encrypted.
     *
     * @example 0
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description The ID of the file system.
     *
     * @example 088b****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system. Valid values:
     *
     *   standard: General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The used capacity of the file system. Unit: bytes.
     *
     * @example 1216816455
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The list of mount targets.
     *
     * @var mountTargetList
     */
    public $mountTargetList;

    /**
     * @description The list of storage plans.
     *
     * @var packageList
     */
    public $packageList;

    /**
     * @description The protocol type of the file system. Valid values:
     *
     * - SMB
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the file system. Valid values:
     *
     * - Deleting: The file system is being deleted.
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type of the file system.
     *
     * - If FileSystemType is set to extreme, the StorageType parameter has the following valid values: standard and advance.
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @example vpc-bp132kgui8n0targbn1cm
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bandWidth'       => 'BandWidth',
        'capacity'        => 'Capacity',
        'createTime'      => 'CreateTime',
        'destription'     => 'Destription',
        'encryptType'     => 'EncryptType',
        'fileSystemId'    => 'FileSystemId',
        'fileSystemType'  => 'FileSystemType',
        'meteredSize'     => 'MeteredSize',
        'mountTargetList' => 'MountTargetList',
        'packageList'     => 'PackageList',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'storageType'     => 'StorageType',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->destription) {
            $res['Destription'] = $this->destription;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->mountTargetList) {
            $res['MountTargetList'] = null !== $this->mountTargetList ? $this->mountTargetList->toMap() : null;
        }
        if (null !== $this->packageList) {
            $res['PackageList'] = null !== $this->packageList ? $this->packageList->toMap() : null;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Destription'])) {
            $model->destription = $map['Destription'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['MountTargetList'])) {
            $model->mountTargetList = mountTargetList::fromMap($map['MountTargetList']);
        }
        if (isset($map['PackageList'])) {
            $model->packageList = packageList::fromMap($map['PackageList']);
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
