<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig\endpoints;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig\policies;

class ProxyConfig extends Model
{
    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var policies
     */
    public $policies;
    protected $_name = [
        'endpoints' => 'endpoints',
        'policies' => 'policies',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (null !== $this->policies) {
            $this->policies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policies) {
            $res['policies'] = null !== $this->policies ? $this->policies->toArray($noStream) : $this->policies;
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
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['policies'])) {
            $model->policies = policies::fromMap($map['policies']);
        }

        return $model;
    }
}
