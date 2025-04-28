<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails;

use AlibabaCloud\Dara\Model;

class scriptRequestParameters extends Model
{
    /**
     * @var string
     */
    public $exampleValue;

    /**
     * @var bool
     */
    public $isRequiredParameter;

    /**
     * @var string
     */
    public $parameterDataType;

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
    public $parameterValueType;
    protected $_name = [
        'exampleValue' => 'ExampleValue',
        'isRequiredParameter' => 'IsRequiredParameter',
        'parameterDataType' => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValueType' => 'ParameterValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
