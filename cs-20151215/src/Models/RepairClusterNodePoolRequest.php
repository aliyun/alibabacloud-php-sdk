<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest\operations;
use AlibabaCloud\Tea\Model;

class RepairClusterNodePoolRequest extends Model
{
    /**
     * @description Specifies whether to allow node restart.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @description The nodes that you want to repair. If you do not specify nodes, all nodes in the node pool are repaired.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @var operations[]
     */
    public $operations;
    protected $_name = [
        'autoRestart' => 'auto_restart',
        'nodes'       => 'nodes',
        'operations'  => 'operations',
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
        if (null !== $this->operations) {
            $res['operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n                 = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
