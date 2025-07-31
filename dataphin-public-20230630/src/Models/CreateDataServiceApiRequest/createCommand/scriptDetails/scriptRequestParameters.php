<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptRequestParameters extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $isRequiredParameter;

    /**
     * @description This parameter is required.
     *
     * @example STRING
     *
     * @var string
     */
    public $parameterDataType;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @description This parameter is required.
     *
     * @example d
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description This parameter is required.
     *
     * @example =
     *
     * @var string
     */
    public $parameterValueType;
    protected $_name = [
        'exampleValue' => 'ExampleValue',
        'isRequiredParameter' => 'IsRequiredParameter',
        'parameterDataType' => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValueType' => 'ParameterValueType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->parameterValueType) {
            $res['ParameterValueType'] = $this->parameterValueType;
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
        if (isset($map['ParameterValueType'])) {
            $model->parameterValueType = $map['ParameterValueType'];
        }

        return $model;
    }
}
