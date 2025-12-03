<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoRequest;

use AlibabaCloud\Dara\Model;

class queryInfos extends Model
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
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mountPointId' => 'MountPointId',
        'vscId' => 'VscId',
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

        return $model;
    }
}
