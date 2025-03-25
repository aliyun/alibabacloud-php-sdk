<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest;

use AlibabaCloud\Dara\Model;

class nodeGroup extends Model
{
    /**
     * @var string
     */
    public $az;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $nodeGroupDescription;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'az' => 'Az',
        'imageId' => 'ImageId',
        'machineType' => 'MachineType',
        'nodeGroupDescription' => 'NodeGroupDescription',
        'nodeGroupName' => 'NodeGroupName',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->az) {
            $res['Az'] = $this->az;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }

        if (null !== $this->nodeGroupDescription) {
            $res['NodeGroupDescription'] = $this->nodeGroupDescription;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Az'])) {
            $model->az = $map['Az'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }

        if (isset($map['NodeGroupDescription'])) {
            $model->nodeGroupDescription = $map['NodeGroupDescription'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
