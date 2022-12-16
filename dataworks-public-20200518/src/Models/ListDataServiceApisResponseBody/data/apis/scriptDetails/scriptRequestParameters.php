<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptRequestParameters extends Model
{
    /**
     * @example column1
     *
     * @var string
     */
    public $columnName;

    /**
     * @example default1
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example example1
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @example true
     *
     * @var bool
     */
    public $isRequiredParameter;

    /**
     * @example 0
     *
     * @var int
     */
    public $parameterDataType;

    /**
     * @example description1
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @example param1
     *
     * @var string
     */
    public $parameterName;

    /**
     * @example 0
     *
     * @var int
     */
    public $parameterOperator;

    /**
     * @example 0
     *
     * @var int
     */
    public $parameterPosition;
    protected $_name = [
        'columnName'           => 'ColumnName',
        'defaultValue'         => 'DefaultValue',
        'exampleValue'         => 'ExampleValue',
        'isRequiredParameter'  => 'IsRequiredParameter',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterOperator'    => 'ParameterOperator',
        'parameterPosition'    => 'ParameterPosition',
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
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->isRequiredParameter) {
            $res['IsRequiredParameter'] = $this->isRequiredParameter;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterOperator) {
            $res['ParameterOperator'] = $this->parameterOperator;
        }
        if (null !== $this->parameterPosition) {
            $res['ParameterPosition'] = $this->parameterPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptRequestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['IsRequiredParameter'])) {
            $model->isRequiredParameter = $map['IsRequiredParameter'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterOperator'])) {
            $model->parameterOperator = $map['ParameterOperator'];
        }
        if (isset($map['ParameterPosition'])) {
            $model->parameterPosition = $map['ParameterPosition'];
        }

        return $model;
    }
}
