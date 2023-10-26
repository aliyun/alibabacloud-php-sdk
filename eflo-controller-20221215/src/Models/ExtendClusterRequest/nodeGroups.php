<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodes;
use AlibabaCloud\Tea\Model;

class nodeGroups extends Model
{
    /**
     * @example i16d4883a46cbadeb4bc9
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'nodeGroupId' => 'NodeGroupId',
        'nodes'       => 'Nodes',
        'userData'    => 'UserData',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
