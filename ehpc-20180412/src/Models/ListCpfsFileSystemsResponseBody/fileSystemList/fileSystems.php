<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\fileSystems\mountTargetList;

class fileSystems extends Model
{
    /**
     * @var string
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
     * @var string
     */
    public $fileSystemId;

    /**
     * @var mountTargetList
     */
    public $mountTargetList;

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
    public $zoneId;
    protected $_name = [
        'capacity' => 'Capacity',
        'createTime' => 'CreateTime',
        'destription' => 'Destription',
        'fileSystemId' => 'FileSystemId',
        'mountTargetList' => 'MountTargetList',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->mountTargetList) {
            $this->mountTargetList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->destription) {
            $res['Destription'] = $this->destription;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->mountTargetList) {
            $res['MountTargetList'] = null !== $this->mountTargetList ? $this->mountTargetList->toArray($noStream) : $this->mountTargetList;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Destription'])) {
            $model->destription = $map['Destription'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['MountTargetList'])) {
            $model->mountTargetList = mountTargetList::fromMap($map['MountTargetList']);
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
