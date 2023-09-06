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
     * @description The time at which the file system is created.
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
     * @description Specifies whether to encrypt the data in the file system.
     *
     * Valid values:
     *
     *   0 (default): The data in the file system is not encrypted.
     *   1: NAS-managed keys are used to encrypt the data in the file system. This value is valid only if the FileSystemType parameter is set to standard or extreme.
     *   2: KMS-managed keys are used to encrypt the data in the file system. This value is valid only if the FileSystemType parameter is set to extreme.
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
     *   standard: general-purpose NAS. extreme: Extreme NAS.
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The used storage of the NAS file system. Unit: byte.
     *
     * @example 1216816455
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The mount targets.
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
     *   NFS- SMB
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the file system. Valid values:
     *
     *   Pending: The file system is processing a task.
     *   Running: The file system is available.
     *   Stopped: The file system is unavailable.
     *   Extending: The file system is being scaled out.
     *   Stopping: The file system is being disabled.
     *   Deleting: The file system is being deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type of the file system.
     *
     *   Valid values when FileSystemType is set to standard: Capacity and Performance. Valid values when FileSystemType is set to extreme: standard and advance.
     *
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The VPC ID of the node.
     *
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
