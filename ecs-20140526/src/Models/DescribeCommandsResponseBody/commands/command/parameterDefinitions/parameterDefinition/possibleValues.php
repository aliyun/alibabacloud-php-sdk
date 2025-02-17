<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions\parameterDefinition;

use AlibabaCloud\Dara\Model;

class possibleValues extends Model
{
    /**
     * @var string[]
     */
    public $possibleValue;
    protected $_name = [
        'possibleValue' => 'PossibleValue',
    ];

    public function validate()
    {
        if (\is_array($this->possibleValue)) {
            Model::validateArray($this->possibleValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->possibleValue) {
            if (\is_array($this->possibleValue)) {
                $res['PossibleValue'] = [];
                $n1                   = 0;
                foreach ($this->possibleValue as $item1) {
                    $res['PossibleValue'][$n1++] = $item1;
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
        if (isset($map['PossibleValue'])) {
            if (!empty($map['PossibleValue'])) {
                $model->possibleValue = [];
                $n1                   = 0;
                foreach ($map['PossibleValue'] as $item1) {
                    $model->possibleValue[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
