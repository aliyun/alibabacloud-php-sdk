<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups\nodes;
use AlibabaCloud\Tea\Model;

class nodeGroups extends Model
{
    /**
     * @example i190297201634099844192
     *
     * @var string
     */
    public $imageId;

    /**
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $nodeGroupDescription;

    /**
     * @example emr-default
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'imageId'              => 'ImageId',
        'machineType'          => 'MachineType',
        'nodeGroupDescription' => 'NodeGroupDescription',
        'nodeGroupName'        => 'NodeGroupName',
        'nodes'                => 'Nodes',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
