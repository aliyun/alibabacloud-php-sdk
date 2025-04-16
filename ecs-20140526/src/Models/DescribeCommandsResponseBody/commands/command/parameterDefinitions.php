<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions\parameterDefinition;

class parameterDefinitions extends Model
{
    /**
     * @var parameterDefinition[]
     */
    public $parameterDefinition;
    protected $_name = [
        'parameterDefinition' => 'ParameterDefinition',
    ];

    public function validate()
    {
        if (\is_array($this->parameterDefinition)) {
            Model::validateArray($this->parameterDefinition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterDefinition) {
            if (\is_array($this->parameterDefinition)) {
                $res['ParameterDefinition'] = [];
                $n1 = 0;
                foreach ($this->parameterDefinition as $item1) {
                    $res['ParameterDefinition'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ParameterDefinition'])) {
            if (!empty($map['ParameterDefinition'])) {
                $model->parameterDefinition = [];
                $n1 = 0;
                foreach ($map['ParameterDefinition'] as $item1) {
                    $model->parameterDefinition[$n1++] = parameterDefinition::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
