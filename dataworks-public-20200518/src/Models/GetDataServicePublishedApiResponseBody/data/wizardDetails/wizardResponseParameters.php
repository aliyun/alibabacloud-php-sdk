<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails;

use AlibabaCloud\Tea\Model;

class wizardResponseParameters extends Model
{
    /**
     * @description The sample value.
     *
     * @example example2
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description The data type of the parameter. Valid values: 0, 1, 2, 3, 4, and 5. The value 0 indicates the STRING data type, the value 1 indicates the INT data type, the value 2 indicates the LONG data type, the value 3 indicates the FLOAT data type, the value 4 indicates the DOUBLE data type, and the value 5 indicates the BOOLEAN data type.
     *
     * @example 0
     *
     * @var int
     */
    public $parameterDataType;

    /**
     * @description The description.
     *
     * @example description2
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example param2
     *
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'exampleValue'         => 'ExampleValue',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
    ];

    public function validate()
    {
    }

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
     * @return wizardResponseParameters
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
