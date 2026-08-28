<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\environment\credentialReferences;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\environment\variables;

class environment extends Model
{
    /**
     * @var credentialReferences[]
     */
    public $credentialReferences;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'credentialReferences' => 'credentialReferences',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->credentialReferences)) {
            Model::validateArray($this->credentialReferences);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialReferences) {
            if (\is_array($this->credentialReferences)) {
                $res['credentialReferences'] = [];
                $n1 = 0;
                foreach ($this->credentialReferences as $item1) {
                    $res['credentialReferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['credentialReferences'])) {
            if (!empty($map['credentialReferences'])) {
                $model->credentialReferences = [];
                $n1 = 0;
                foreach ($map['credentialReferences'] as $item1) {
                    $model->credentialReferences[$n1] = credentialReferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
