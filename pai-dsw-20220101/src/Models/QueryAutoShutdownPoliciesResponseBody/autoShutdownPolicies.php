<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\QueryAutoShutdownPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\QueryAutoShutdownPoliciesResponseBody\autoShutdownPolicies\conditions;

class autoShutdownPolicies extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var mixed[]
     */
    public $context;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'conditions' => 'Conditions',
        'context' => 'Context',
        'expression' => 'Expression',
        'instanceId' => 'InstanceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['Context'] = [];
                foreach ($this->context as $key1 => $value1) {
                    $res['Context'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Context'])) {
            if (!empty($map['Context'])) {
                $model->context = [];
                foreach ($map['Context'] as $key1 => $value1) {
                    $model->context[$key1] = $value1;
                }
            }
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
