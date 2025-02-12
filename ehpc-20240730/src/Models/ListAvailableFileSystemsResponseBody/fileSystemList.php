<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody\fileSystemList\mountTargetList;

class fileSystemList extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $fileSystemType;
    /**
     * @var mountTargetList[]
     */
    public $mountTargetList;
    /**
     * @var string
     */
    public $protocolType;
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
        if (\is_array($this->mountTargetList)) {
            Model::validateArray($this->mountTargetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->mountTargetList)) {
                $res['MountTargetList'] = [];
                $n1                     = 0;
                foreach ($this->mountTargetList as $item1) {
                    $res['MountTargetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                     = 0;
                foreach ($map['MountTargetList'] as $item1) {
                    $model->mountTargetList[$n1++] = mountTargetList::fromMap($item1);
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
