<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails;

use AlibabaCloud\Tea\Model;

class registrationRequestParameters extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var int
     */
    public $parameterPosition;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $parameterOperator;

    /**
     * @var int
     */
    public $parameterDataType;

    /**
     * @var string
     */
    public $exampleValue;

    /**
     * @var bool
     */
    public $isRequiredParameter;
    protected $_name = [
        'columnName'           => 'ColumnName',
        'parameterName'        => 'ParameterName',
        'parameterPosition'    => 'ParameterPosition',
        'parameterDescription' => 'ParameterDescription',
        'defaultValue'         => 'DefaultValue',
        'parameterOperator'    => 'ParameterOperator',
        'parameterDataType'    => 'ParameterDataType',
        'exampleValue'         => 'ExampleValue',
        'isRequiredParameter'  => 'IsRequiredParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterPosition) {
            $res['ParameterPosition'] = $this->parameterPosition;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->parameterOperator) {
            $res['ParameterOperator'] = $this->parameterOperator;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->isRequiredParameter) {
            $res['IsRequiredParameter'] = $this->isRequiredParameter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrationRequestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterPosition'])) {
            $model->parameterPosition = $map['ParameterPosition'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['ParameterOperator'])) {
            $model->parameterOperator = $map['ParameterOperator'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['IsRequiredParameter'])) {
            $model->isRequiredParameter = $map['IsRequiredParameter'];
        }

        return $model;
    }
}
