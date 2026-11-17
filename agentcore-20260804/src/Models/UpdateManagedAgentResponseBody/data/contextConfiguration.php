<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentResponseBody\data\contextConfiguration\bindings;

class contextConfiguration extends Model
{
    /**
     * @var bindings[]
     */
    public $bindings;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'bindings' => 'bindings',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        if (\is_array($this->bindings)) {
            Model::validateArray($this->bindings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindings) {
            if (\is_array($this->bindings)) {
                $res['bindings'] = [];
                $n1 = 0;
                foreach ($this->bindings as $item1) {
                    $res['bindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['bindings'])) {
            if (!empty($map['bindings'])) {
                $model->bindings = [];
                $n1 = 0;
                foreach ($map['bindings'] as $item1) {
                    $model->bindings[$n1] = bindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
