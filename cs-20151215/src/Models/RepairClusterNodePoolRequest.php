<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RepairClusterNodePoolRequest extends Model
{
    /**
     * @description 节点列表，如果不指定则表示当前节点池内所有节点
     *
     * @var string[]
     */
    public $nodes;
    protected $_name = [
        'nodes' => 'nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RepairClusterNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }

        return $model;
    }
}
