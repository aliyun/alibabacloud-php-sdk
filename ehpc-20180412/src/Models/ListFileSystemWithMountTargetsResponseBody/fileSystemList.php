<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\mountTargetList;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\packageList;
use AlibabaCloud\Tea\Model;

class fileSystemList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var mountTargetList[]
     */
    public $mountTargetList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var packageList[]
     */
    public $packageList;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $destription;
    protected $_name = [
        'status'          => 'Status',
        'capacity'        => 'Capacity',
        'mountTargetList' => 'MountTargetList',
        'createTime'      => 'CreateTime',
        'packageList'     => 'PackageList',
        'storageType'     => 'StorageType',
        'bandWidth'       => 'BandWidth',
        'regionId'        => 'RegionId',
        'fileSystemType'  => 'FileSystemType',
        'fileSystemId'    => 'FileSystemId',
        'meteredSize'     => 'MeteredSize',
        'encryptType'     => 'EncryptType',
        'protocolType'    => 'ProtocolType',
        'destription'     => 'Destription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->mountTargetList) {
            $res['MountTargetList'] = [];
            if (null !== $this->mountTargetList && \is_array($this->mountTargetList)) {
                $n = 0;
                foreach ($this->mountTargetList as $item) {
                    $res['MountTargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->packageList) {
            $res['PackageList'] = [];
            if (null !== $this->packageList && \is_array($this->packageList)) {
                $n = 0;
                foreach ($this->packageList as $item) {
                    $res['PackageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->destription) {
            $res['Destription'] = $this->destription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['MountTargetList'])) {
            if (!empty($map['MountTargetList'])) {
                $model->mountTargetList = [];
                $n                      = 0;
                foreach ($map['MountTargetList'] as $item) {
                    $model->mountTargetList[$n++] = null !== $item ? mountTargetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PackageList'])) {
            if (!empty($map['PackageList'])) {
                $model->packageList = [];
                $n                  = 0;
                foreach ($map['PackageList'] as $item) {
                    $model->packageList[$n++] = null !== $item ? packageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Destription'])) {
            $model->destription = $map['Destription'];
        }

        return $model;
    }
}
