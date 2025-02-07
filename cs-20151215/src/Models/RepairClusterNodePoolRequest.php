<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest\operations;

class RepairClusterNodePoolRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRestart;
    /**
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
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRestart) {
            $res['auto_restart'] = $this->autoRestart;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1                = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['auto_restart'])) {
            $model->autoRestart = $map['auto_restart'];
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n1                = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1++] = operations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
