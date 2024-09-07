<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody\fileSystemList\mountTargetList;
use AlibabaCloud\Tea\Model;

class fileSystemList extends Model
{
    /**
     * @example 2024-7-29 15:43:53
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2fa0248***
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example cpfs
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @var mountTargetList[]
     */
    public $mountTargetList;

    /**
     * @example cpfs
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
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
