<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest\overrides;

use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest\overrides\containerOverrides\environmentVars;
use AlibabaCloud\Tea\Model;

class containerOverrides extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string[]
     */
    public $commands;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'args'            => 'Args',
        'commands'        => 'Commands',
        'cpu'             => 'Cpu',
        'environmentVars' => 'EnvironmentVars',
        'memory'          => 'Memory',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->environmentVars) {
            $res['EnvironmentVars'] = [];
            if (null !== $this->environmentVars && \is_array($this->environmentVars)) {
                $n = 0;
                foreach ($this->environmentVars as $item) {
                    $res['EnvironmentVars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerOverrides
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = $map['Args'];
            }
        }
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = $map['Commands'];
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n                      = 0;
                foreach ($map['EnvironmentVars'] as $item) {
                    $model->environmentVars[$n++] = null !== $item ? environmentVars::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
