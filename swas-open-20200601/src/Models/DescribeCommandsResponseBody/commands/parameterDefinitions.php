<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands;

use AlibabaCloud\Dara\Model;

class parameterDefinitions extends Model
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
     * @var string[]
     */
    public $possibleValues;
    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'defaultValue'   => 'DefaultValue',
        'description'    => 'Description',
        'parameterName'  => 'ParameterName',
        'possibleValues' => 'PossibleValues',
        'required'       => 'Required',
    ];

    public function validate()
    {
        if (\is_array($this->possibleValues)) {
            Model::validateArray($this->possibleValues);
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

        if (null !== $this->possibleValues) {
            if (\is_array($this->possibleValues)) {
                $res['PossibleValues'] = [];
                $n1                    = 0;
                foreach ($this->possibleValues as $item1) {
                    $res['PossibleValues'][$n1++] = $item1;
                }
            }
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

        if (isset($map['PossibleValues'])) {
            if (!empty($map['PossibleValues'])) {
                $model->possibleValues = [];
                $n1                    = 0;
                foreach ($map['PossibleValues'] as $item1) {
                    $model->possibleValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
