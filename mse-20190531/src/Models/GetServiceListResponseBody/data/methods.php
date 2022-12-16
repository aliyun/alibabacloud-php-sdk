<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class methods extends Model
{
    /**
     * @description The controller of the method.
     *
     * @example com.alibaba.SayHelloController
     *
     * @var string
     */
    public $methodController;

    /**
     * @description The name of the method.
     *
     * @example sayHello
     *
     * @var string
     */
    public $name;

    /**
     * @description The data types of the parameters.
     *
     * @var string[]
     */
    public $parameterTypes;

    /**
     * @description The paths.
     *
     * @var string[]
     */
    public $paths;

    /**
     * @description The methods.
     *
     * @var string[]
     */
    public $requestMethods;

    /**
     * @description The type of the return value.
     *
     * @example int
     *
     * @var string
     */
    public $returnType;
    protected $_name = [
        'methodController' => 'MethodController',
        'name'             => 'Name',
        'parameterTypes'   => 'ParameterTypes',
        'paths'            => 'Paths',
        'requestMethods'   => 'RequestMethods',
        'returnType'       => 'ReturnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->methodController) {
            $res['MethodController'] = $this->methodController;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterTypes) {
            $res['ParameterTypes'] = $this->parameterTypes;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->requestMethods) {
            $res['RequestMethods'] = $this->requestMethods;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return methods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MethodController'])) {
            $model->methodController = $map['MethodController'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterTypes'])) {
            if (!empty($map['ParameterTypes'])) {
                $model->parameterTypes = $map['ParameterTypes'];
            }
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['RequestMethods'])) {
            if (!empty($map['RequestMethods'])) {
                $model->requestMethods = $map['RequestMethods'];
            }
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        return $model;
    }
}
