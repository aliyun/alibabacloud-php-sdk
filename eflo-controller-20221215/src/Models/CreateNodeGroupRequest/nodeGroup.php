<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest;

use AlibabaCloud\Tea\Model;

class nodeGroup extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $az;

    /**
     * @description This parameter is required.
     *
     * @example i191887641687336652616
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @example mock-machine-type3
     *
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $nodeGroupDescription;

    /**
     * @description This parameter is required.
     *
     * @example PAI-LINGJUN
     *
     * @var string
     */
    public $nodeGroupName;
    protected $_name = [
        'az' => 'Az',
        'imageId' => 'ImageId',
        'machineType' => 'MachineType',
        'nodeGroupDescription' => 'NodeGroupDescription',
        'nodeGroupName' => 'NodeGroupName',
    ];

    public function validate() {}

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeGroup
     */
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

        return $model;
    }
}
