<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions\parameterDefinition;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->possibleValue) {
            $res['PossibleValue'] = $this->possibleValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return possibleValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PossibleValue'])) {
            if (!empty($map['PossibleValue'])) {
                $model->possibleValue = $map['PossibleValue'];
            }
        }

        return $model;
    }
}
