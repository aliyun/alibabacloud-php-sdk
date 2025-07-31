<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptResponseParameters extends Model
{
    /**
     * @example amazing
     *
     * @var string
     */
    public $exampleValue;

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
     * @example a
     *
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'exampleValue' => 'ExampleValue',
        'parameterDataType' => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptResponseParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
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

        return $model;
    }
}
