<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;

class AttachVscMountPointShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $mountPointId;

    /**
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;

    /**
     * @var string
     */
    public $vscIdsShrink;

    /**
     * @var string
     */
    public $vscName;

    /**
     * @var string
     */
    public $vscType;
    protected $_name = [
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'instanceIdsShrink' => 'InstanceIds',
        'mountPointId' => 'MountPointId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
        'vscIdsShrink' => 'VscIds',
        'vscName' => 'VscName',
        'vscType' => 'VscType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }

        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
        }

        if (null !== $this->vscIdsShrink) {
            $res['VscIds'] = $this->vscIdsShrink;
        }

        if (null !== $this->vscName) {
            $res['VscName'] = $this->vscName;
        }

        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
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
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }

        if (isset($map['UseAssumeRoleChkServerPerm'])) {
            $model->useAssumeRoleChkServerPerm = $map['UseAssumeRoleChkServerPerm'];
        }

        if (isset($map['VscIds'])) {
            $model->vscIdsShrink = $map['VscIds'];
        }

        if (isset($map['VscName'])) {
            $model->vscName = $map['VscName'];
        }

        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
