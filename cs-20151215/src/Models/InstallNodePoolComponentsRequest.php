<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallNodePoolComponentsRequest\components;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallNodePoolComponentsRequest\rollingPolicy;

class InstallNodePoolComponentsRequest extends Model
{
    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;
    protected $_name = [
        'components' => 'components',
        'nodeNames' => 'nodeNames',
        'rollingPolicy' => 'rollingPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
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
        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1] = components::fromMap($item1);
                    ++$n1;
                }
            }
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

        return $model;
    }
}
