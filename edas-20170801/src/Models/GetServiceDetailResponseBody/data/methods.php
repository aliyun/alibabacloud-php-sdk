<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailResponseBody\data\methods\returnDefinition;
use AlibabaCloud\Tea\Model;

class methods extends Model
{
    /**
     * @description The controllers.
     *
     * @example com.aliware.edas.DemoController
     *
     * @var string
     */
    public $methodController;

    /**
     * @description The name of the service.
     *
     * @example feign2
     *
     * @var string
     */
    public $name;

    /**
     * @description The specific name.
     *
     * @example test
     *
     * @var string
     */
    public $nameDetail;

    /**
     * @description The parameter definitions.
     *
     * @example [{"description":"","name":"arg0","type":"java.lang.String"}]
     *
     * @var string
     */
    public $parameterDefinitions;

    /**
     * @description The parameter details.
     *
     * @example {}
     *
     * @var string
     */
    public $parameterDetails;

    /**
     * @description The parameter names.
     *
     * @example test
     *
     * @var string
     */
    public $parameterNames;

    /**
     * @description The parameter types.
     *
     * @example ["java.lang.String"]
     *
     * @var string
     */
    public $parameterTypes;

    /**
     * @description The method paths.
     *
     * @example ["/consumer-echo/feign/{str}"]
     *
     * @var string
     */
    public $paths;

    /**
     * @description The request methods.
     *
     * @example GET
     *
     * @var string
     */
    public $requestMethods;

    /**
     * @description The definition of the value returned by the method.
     *
     * @var returnDefinition
     */
    public $returnDefinition;

    /**
     * @description The response details.
     *
     * @example test
     *
     * @var string
     */
    public $returnDetails;

    /**
     * @description The type of the response.
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
        'parameterNames'       => 'ParameterNames',
        'parameterTypes'       => 'ParameterTypes',
        'paths'                => 'Paths',
        'requestMethods'       => 'RequestMethods',
        'returnDefinition'     => 'ReturnDefinition',
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
            $res['ParameterDefinitions'] = $this->parameterDefinitions;
        }
        if (null !== $this->parameterDetails) {
            $res['ParameterDetails'] = $this->parameterDetails;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = $this->parameterNames;
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
        if (null !== $this->returnDefinition) {
            $res['ReturnDefinition'] = null !== $this->returnDefinition ? $this->returnDefinition->toMap() : null;
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
            $model->parameterDefinitions = $map['ParameterDefinitions'];
        }
        if (isset($map['ParameterDetails'])) {
            $model->parameterDetails = $map['ParameterDetails'];
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = $map['ParameterNames'];
        }
        if (isset($map['ParameterTypes'])) {
            $model->parameterTypes = $map['ParameterTypes'];
        }
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }
        if (isset($map['RequestMethods'])) {
            $model->requestMethods = $map['RequestMethods'];
        }
        if (isset($map['ReturnDefinition'])) {
            $model->returnDefinition = returnDefinition::fromMap($map['ReturnDefinition']);
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
