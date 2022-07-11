<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions\parameterDefinition;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterDefinition) {
            $res['ParameterDefinition'] = [];
            if (null !== $this->parameterDefinition && \is_array($this->parameterDefinition)) {
                $n = 0;
                foreach ($this->parameterDefinition as $item) {
                    $res['ParameterDefinition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterDefinitions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterDefinition'])) {
            if (!empty($map['ParameterDefinition'])) {
                $model->parameterDefinition = [];
                $n                          = 0;
                foreach ($map['ParameterDefinition'] as $item) {
                    $model->parameterDefinition[$n++] = null !== $item ? parameterDefinition::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
