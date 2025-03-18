<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest\operations;
use AlibabaCloud\Tea\Model;

class RepairClusterNodePoolRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic instance restart.
     **Warning** This parameter is deprecated. Any configured values will be ignored.
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @description The list of nodes. If not specified, all nodes in the node pool are selected.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @description The list of repair operations to execute. If not specified, all repair operations are executed. Typically, you do not need to specify this parameter.
     *
     * @var operations[]
     */
    public $operations;
    protected $_name = [
        'autoRestart' => 'auto_restart',
        'nodes' => 'nodes',
        'operations' => 'operations',
    ];

    public function validate() {}

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
                $n = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
