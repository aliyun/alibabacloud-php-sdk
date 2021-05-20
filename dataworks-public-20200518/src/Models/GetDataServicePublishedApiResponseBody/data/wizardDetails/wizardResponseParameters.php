<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails;

use AlibabaCloud\Tea\Model;

class wizardResponseParameters extends Model
{
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
    public $exampleValue;

    /**
     * @var int
     */
    public $parameterDataType;
    protected $_name = [
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'exampleValue'         => 'ExampleValue',
        'parameterDataType'    => 'ParameterDataType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
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
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }

        return $model;
    }
}
