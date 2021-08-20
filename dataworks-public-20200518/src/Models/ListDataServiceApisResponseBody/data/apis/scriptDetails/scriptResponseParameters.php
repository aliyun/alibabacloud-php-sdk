<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptResponseParameters extends Model
{
    /**
     * @var string
     */
    public $parameterDescription;

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
    public $parameterDataType;

    /**
     * @var string
     */
    public $exampleValue;
    protected $_name = [
        'parameterDescription' => 'ParameterDescription',
        'columnName'           => 'ColumnName',
        'parameterName'        => 'ParameterName',
        'parameterDataType'    => 'ParameterDataType',
        'exampleValue'         => 'ExampleValue',
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
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
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
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }

        return $model;
    }
}
