<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data;

use AlibabaCloud\Dara\Model;

class authorizedProdReturnParameters extends Model
{
    /**
     * @var string
     */
    public $exampleValue;

    /**
     * @var int
     */
    public $isAuthorized;

    /**
     * @var int
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
    protected $_name = [
        'exampleValue' => 'ExampleValue',
        'isAuthorized' => 'IsAuthorized',
        'parameterDataType' => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
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
