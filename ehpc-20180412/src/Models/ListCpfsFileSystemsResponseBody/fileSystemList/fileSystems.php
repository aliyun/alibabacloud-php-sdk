<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\fileSystems\mountTargetList;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @description The capacity of the file system. Unit: GiB.
     *
     * @example 5120
     *
     * @var string
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
     * @example FilsDestription
     *
     * @var string
     */
    public $destription;

    /**
     * @description The ID of the file system.
     *
     * @example 096751****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The mount targets.
     *
     * @var mountTargetList
     */
    public $mountTargetList;

    /**
     * @description The protocol type that is applied to the mounted file system. Valid values:
     *
     *   NFS
     *   SMB
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
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacity'        => 'Capacity',
        'createTime'      => 'CreateTime',
        'destription'     => 'Destription',
        'fileSystemId'    => 'FileSystemId',
        'mountTargetList' => 'MountTargetList',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['MountTargetList'] = null !== $this->mountTargetList ? $this->mountTargetList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return fileSystems
     */
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
