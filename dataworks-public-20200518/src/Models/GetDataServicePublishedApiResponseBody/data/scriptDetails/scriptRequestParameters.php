<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptRequestParameters extends Model
{
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
     * @var string
     */
    public $exampleValue;

    /**
     * @var int
     */
    public $parameterDataType;

    /**
     * @var bool
     */
    public $isRequiredParameter;
    protected $_name = [
        'parameterName'        => 'ParameterName',
        'parameterPosition'    => 'ParameterPosition',
        'parameterDescription' => 'ParameterDescription',
        'defaultValue'         => 'DefaultValue',
        'parameterOperator'    => 'ParameterOperator',
        'exampleValue'         => 'ExampleValue',
        'parameterDataType'    => 'ParameterDataType',
        'isRequiredParameter'  => 'IsRequiredParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->isRequiredParameter) {
            $res['IsRequiredParameter'] = $this->isRequiredParameter;
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
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['IsRequiredParameter'])) {
            $model->isRequiredParameter = $map['IsRequiredParameter'];
        }

        return $model;
    }
}
