<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest\nodeGroups\nodes;
use AlibabaCloud\Tea\Model;

class nodeGroups extends Model
{
    /**
     * @example ng-3b6fbd24b1b845a0
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'nodeGroupId' => 'NodeGroupId',
        'nodes'       => 'Nodes',
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

        return $model;
    }
}
