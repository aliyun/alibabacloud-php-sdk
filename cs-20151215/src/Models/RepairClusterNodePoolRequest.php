<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RepairClusterNodePoolRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @description The list of nodes. If you do not specify nodes, all nodes in the node pool are selected.
     *
     * @var string[]
     */
    public $nodes;
    protected $_name = [
        'autoRestart' => 'auto_restart',
        'nodes'       => 'nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRestart) {
            $res['auto_restart'] = $this->autoRestart;
        }
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
        if (isset($map['auto_restart'])) {
            $model->autoRestart = $map['auto_restart'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }

        return $model;
    }
}
