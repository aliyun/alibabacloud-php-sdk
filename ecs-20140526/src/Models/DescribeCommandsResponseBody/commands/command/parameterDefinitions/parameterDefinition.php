<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions\parameterDefinition\possibleValues;

class parameterDefinition extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $patternRegex;

    /**
     * @var possibleValues
     */
    public $possibleValues;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'parameterName' => 'ParameterName',
        'patternRegex' => 'PatternRegex',
        'possibleValues' => 'PossibleValues',
        'required' => 'Required',
    ];

    public function validate()
    {
        if (null !== $this->possibleValues) {
            $this->possibleValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        if (null !== $this->patternRegex) {
            $res['PatternRegex'] = $this->patternRegex;
        }

        if (null !== $this->possibleValues) {
            $res['PossibleValues'] = null !== $this->possibleValues ? $this->possibleValues->toArray($noStream) : $this->possibleValues;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['PatternRegex'])) {
            $model->patternRegex = $map['PatternRegex'];
        }

        if (isset($map['PossibleValues'])) {
            $model->possibleValues = possibleValues::fromMap($map['PossibleValues']);
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
