<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\mountTargetList;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @var int
     */
    public $bandWidth;

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
    public $destription;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var mountTargetList
     */
    public $mountTargetList;

    /**
     * @var packageList
     */
    public $packageList;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
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
