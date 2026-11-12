<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointResponseBody\data\elasticityPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointResponseBody\data\elasticityPolicy\dynamicPolicy\policies;

class dynamicPolicy extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var policies[]
     */
    public $policies;
    protected $_name = [
        'enabled' => 'enabled',
        'policies' => 'policies',
    ];

    public function validate()
    {
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['policies'] = [];
                $n1 = 0;
                foreach ($this->policies as $item1) {
                    $res['policies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['policies'])) {
            if (!empty($map['policies'])) {
                $model->policies = [];
                $n1 = 0;
                foreach ($map['policies'] as $item1) {
                    $model->policies[$n1] = policies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
