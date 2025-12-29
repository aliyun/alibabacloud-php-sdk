<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentRequest\config;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentRequest\rollingPolicy;

class UpdateNodePoolComponentRequest extends Model
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
     * @var string
     */
    public $name;

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
        'disableRolling' => 'disableRolling',
        'name' => 'name',
        'nodeNames' => 'nodeNames',
        'rollingPolicy' => 'rollingPolicy',
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
            $res['disableRolling'] = $this->disableRolling;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['nodeNames'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['nodeNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rollingPolicy) {
            $res['rollingPolicy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toArray($noStream) : $this->rollingPolicy;
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

        if (isset($map['disableRolling'])) {
            $model->disableRolling = $map['disableRolling'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nodeNames'])) {
            if (!empty($map['nodeNames'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['nodeNames'] as $item1) {
                    $model->nodeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rollingPolicy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rollingPolicy']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
