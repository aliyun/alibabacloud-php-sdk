<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody\fileSystemList\mountTargetList;
use AlibabaCloud\Tea\Model;

class fileSystemList extends Model
{
    /**
     * @description The time when the file system was created.
     *
     * @example 2024-7-29 15:43:53
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the file system.
     *
     * @example 2fa0248***
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system. Valid values:
     *
     *   standard: general-purpose network-attached storage (NAS) file system
     *   extreme: extreme NAS file system
     *
     * @example cpfs
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The mount targets of the file system.
     *
     * @var mountTargetList[]
     */
    public $mountTargetList;

    /**
     * @description The protocol type of the file system. Valid values:
     *
     *   nfs
     *   smb
     *   cpfs
     *
     * @example cpfs
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The state of the file system. Valid values:
     *
     *   Pending: The file system is processing a task.
     *   Running: The file system is available. You can perform subsequent operations, such as creating a mount target, only when the file system is in the Running state.
     *   Stopped: The file system is unavailable.
     *   Extending: The file system is being scaled out.
     *   Stopping: The file system is being stopped.
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
     *   Valid values if FileSystemType is set to standard: Capacity and Performance.
     *   Valid values if FileSystemType is set to extreme: standard and advance.
     *
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp132kgui8n0targb****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'fileSystemId'    => 'FileSystemId',
        'fileSystemType'  => 'FileSystemType',
        'mountTargetList' => 'MountTargetList',
        'protocolType'    => 'ProtocolType',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
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
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
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
     * @return fileSystemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
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
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
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
