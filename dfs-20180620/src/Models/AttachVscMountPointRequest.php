<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class AttachVscMountPointRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 037****e1d
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example ["ecs-instance1", "ecs-instance2"]
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example 037cb49e1d-c***5
     *
     * @var string
     */
    public $mountPointId;

    /**
     * @var string[]
     */
    public $vscIds;

    /**
     * @var string
     */
    public $vscType;
    protected $_name = [
        'description'   => 'Description',
        'fileSystemId'  => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'instanceIds'   => 'InstanceIds',
        'mountPointId'  => 'MountPointId',
        'vscIds'        => 'VscIds',
        'vscType'       => 'VscType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }
        if (null !== $this->vscIds) {
            $res['VscIds'] = $this->vscIds;
        }
        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachVscMountPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }
        if (isset($map['VscIds'])) {
            if (!empty($map['VscIds'])) {
                $model->vscIds = $map['VscIds'];
            }
        }
        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
