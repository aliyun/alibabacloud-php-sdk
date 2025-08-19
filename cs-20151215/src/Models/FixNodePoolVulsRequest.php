<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest\rolloutPolicy;

class FixNodePoolVulsRequest extends Model
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
     * @var rolloutPolicy
     */
    public $rolloutPolicy;

    /**
     * @var string[]
     */
    public $vuls;
    protected $_name = [
        'autoRestart' => 'auto_restart',
        'nodes' => 'nodes',
        'rolloutPolicy' => 'rollout_policy',
        'vuls' => 'vuls',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->rolloutPolicy) {
            $this->rolloutPolicy->validate();
        }
        if (\is_array($this->vuls)) {
            Model::validateArray($this->vuls);
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
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rolloutPolicy) {
            $res['rollout_policy'] = null !== $this->rolloutPolicy ? $this->rolloutPolicy->toArray($noStream) : $this->rolloutPolicy;
        }

        if (null !== $this->vuls) {
            if (\is_array($this->vuls)) {
                $res['vuls'] = [];
                $n1 = 0;
                foreach ($this->vuls as $item1) {
                    $res['vuls'][$n1] = $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rollout_policy'])) {
            $model->rolloutPolicy = rolloutPolicy::fromMap($map['rollout_policy']);
        }

        if (isset($map['vuls'])) {
            if (!empty($map['vuls'])) {
                $model->vuls = [];
                $n1 = 0;
                foreach ($map['vuls'] as $item1) {
                    $model->vuls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
