<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data\methods\parameterDefinitions;
use AlibabaCloud\Tea\Model;

class methods extends Model
{
    /**
     * @description The class to which the method belongs.
     *
     * @example com.serverless.sae.controller.EchoController
     *
     * @var string
     */
    public $methodController;

    /**
     * @description The name of the method.
     *
     * @example echo
     *
     * @var string
     */
    public $name;

    /**
     * @description The details of the method.
     *
     * @example description
     *
     * @var string
     */
    public $nameDetail;

    /**
     * @description The definition of the parameter.
     *
     * @var parameterDefinitions[]
     */
    public $parameterDefinitions;

    /**
     * @description The details of the parameters.
     *
     * @var string[]
     */
    public $parameterDetails;

    /**
     * @description The types of the parameters.
     *
     * @var string[]
     */
    public $parameterTypes;

    /**
     * @description The request paths. Format:
     *
     * `/path`
     * @var string[]
     */
    public $paths;

    /**
     * @description The request methods. Valid values:
     *
     *   **GET**
     *   **ALL**
     *
     * @var string[]
     */
    public $requestMethods;

    /**
     * @description The details of the response.
     *
     * @example test
     *
     * @var string
     */
    public $returnDetails;

    /**
     * @description The data format of the response.
     *
     * @example java.lang.String
     *
     * @var string
     */
    public $returnType;
    protected $_name = [
        'methodController'     => 'MethodController',
        'name'                 => 'Name',
        'nameDetail'           => 'NameDetail',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterDetails'     => 'ParameterDetails',
        'parameterTypes'       => 'ParameterTypes',
        'paths'                => 'Paths',
        'requestMethods'       => 'RequestMethods',
        'returnDetails'        => 'ReturnDetails',
        'returnType'           => 'ReturnType',
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
        if (null !== $this->nameDetail) {
            $res['NameDetail'] = $this->nameDetail;
        }
        if (null !== $this->parameterDefinitions) {
            $res['ParameterDefinitions'] = [];
            if (null !== $this->parameterDefinitions && \is_array($this->parameterDefinitions)) {
                $n = 0;
                foreach ($this->parameterDefinitions as $item) {
                    $res['ParameterDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameterDetails) {
            $res['ParameterDetails'] = $this->parameterDetails;
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
        if (null !== $this->returnDetails) {
            $res['ReturnDetails'] = $this->returnDetails;
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
        if (isset($map['NameDetail'])) {
            $model->nameDetail = $map['NameDetail'];
        }
        if (isset($map['ParameterDefinitions'])) {
            if (!empty($map['ParameterDefinitions'])) {
                $model->parameterDefinitions = [];
                $n                           = 0;
                foreach ($map['ParameterDefinitions'] as $item) {
                    $model->parameterDefinitions[$n++] = null !== $item ? parameterDefinitions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParameterDetails'])) {
            if (!empty($map['ParameterDetails'])) {
                $model->parameterDetails = $map['ParameterDetails'];
            }
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
        if (isset($map['ReturnDetails'])) {
            $model->returnDetails = $map['ReturnDetails'];
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        return $model;
    }
}
