<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The ID of the replica node.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeCopyId;

    /**
     * @description The ID of the node.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The information of node resources.
     *
     * @var nodeResource[]
     */
    public $nodeResource;

    /**
     * @description The status of the node.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $nodeStatus;
    protected $_name = [
        'nodeCopyId'   => 'NodeCopyId',
        'nodeId'       => 'NodeId',
        'nodeResource' => 'NodeResource',
        'nodeStatus'   => 'NodeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeCopyId) {
            $res['NodeCopyId'] = $this->nodeCopyId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeResource) {
            $res['NodeResource'] = [];
            if (null !== $this->nodeResource && \is_array($this->nodeResource)) {
                $n = 0;
                foreach ($this->nodeResource as $item) {
                    $res['NodeResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeCopyId'])) {
            $model->nodeCopyId = $map['NodeCopyId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeResource'])) {
            if (!empty($map['NodeResource'])) {
                $model->nodeResource = [];
                $n                   = 0;
                foreach ($map['NodeResource'] as $item) {
                    $model->nodeResource[$n++] = null !== $item ? nodeResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        return $model;
    }
}
