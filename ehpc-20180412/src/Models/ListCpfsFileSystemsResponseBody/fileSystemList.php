<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\mountTargetList;
use AlibabaCloud\Tea\Model;

class fileSystemList extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var mountTargetList[]
     */
    public $mountTargetList;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $destription;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fileSystemId'    => 'FileSystemId',
        'capacity'        => 'Capacity',
        'createTime'      => 'CreateTime',
        'mountTargetList' => 'MountTargetList',
        'zoneId'          => 'ZoneId',
        'protocolType'    => 'ProtocolType',
        'destription'     => 'Destription',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->destription) {
            $res['Destription'] = $this->destription;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Destription'])) {
            $model->destription = $map['Destription'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
