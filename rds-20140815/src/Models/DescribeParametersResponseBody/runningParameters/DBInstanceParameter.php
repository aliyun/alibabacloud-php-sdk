<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Dara\Model;

class DBInstanceParameter extends Model
{
    /**
     * @var string
     */
    public $parameterDefaultValue;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterValue;

    /**
     * @var string
     */
    public $parameterValueRange;
    protected $_name = [
        'parameterDefaultValue' => 'ParameterDefaultValue',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValue' => 'ParameterValue',
        'parameterValueRange' => 'ParameterValueRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterDefaultValue) {
            $res['ParameterDefaultValue'] = $this->parameterDefaultValue;
        }

        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        if (null !== $this->parameterValueRange) {
            $res['ParameterValueRange'] = $this->parameterValueRange;
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
        if (isset($map['ParameterDefaultValue'])) {
            $model->parameterDefaultValue = $map['ParameterDefaultValue'];
        }

        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        if (isset($map['ParameterValueRange'])) {
            $model->parameterValueRange = $map['ParameterValueRange'];
        }

        return $model;
    }
}
