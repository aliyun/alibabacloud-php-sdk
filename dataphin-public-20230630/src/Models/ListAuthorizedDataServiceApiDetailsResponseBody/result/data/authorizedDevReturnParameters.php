<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class authorizedDevReturnParameters extends Model
{
    /**
     * @example example1
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $isAuthorized;

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
    protected $_name = [
        'exampleValue' => 'ExampleValue',
        'isAuthorized' => 'IsAuthorized',
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
        if (null !== $this->isAuthorized) {
            $res['IsAuthorized'] = $this->isAuthorized;
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
     * @return authorizedDevReturnParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['IsAuthorized'])) {
            $model->isAuthorized = $map['IsAuthorized'];
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
