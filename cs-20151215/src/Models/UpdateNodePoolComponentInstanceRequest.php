<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentInstanceRequest\config;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentInstanceRequest\rollingPolicy;

class UpdateNodePoolComponentInstanceRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var bool
     */
    public $disableRolling;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'config' => 'config',
        'disableRolling' => 'disable_rolling',
        'nodeNames' => 'node_names',
        'rollingPolicy' => 'rolling_policy',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        if (null !== $this->rollingPolicy) {
            $this->rollingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->disableRolling) {
            $res['disable_rolling'] = $this->disableRolling;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['node_names'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['node_names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toArray($noStream) : $this->rollingPolicy;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['disable_rolling'])) {
            $model->disableRolling = $map['disable_rolling'];
        }

        if (isset($map['node_names'])) {
            if (!empty($map['node_names'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['node_names'] as $item1) {
                    $model->nodeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
