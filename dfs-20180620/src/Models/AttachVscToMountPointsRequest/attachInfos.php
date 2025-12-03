<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsRequest;

use AlibabaCloud\Dara\Model;

class attachInfos extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mountPointId;

    /**
     * @var string
     */
    public $vscId;

    /**
     * @var string
     */
    public $vscName;

    /**
     * @var string
     */
    public $vscType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mountPointId' => 'MountPointId',
        'vscId' => 'VscId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }

        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }

        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
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
