<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class methods extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $returnType;

    /**
     * @var string
     */
    public $methodController;

    /**
     * @var string
     */
    public $parameterNames;

    /**
     * @var string
     */
    public $nameDetail;

    /**
     * @var string
     */
    public $returnDetails;

    /**
     * @var string
     */
    public $parameterTypes;

    /**
     * @var string
     */
    public $parameterDetails;

    /**
     * @var string
     */
    public $requestMethods;

    /**
     * @var string
     */
    public $paths;

    /**
     * @var string
     */
    public $parameterDefinitions;
    protected $_name = [
        'name'                 => 'Name',
        'returnType'           => 'ReturnType',
        'methodController'     => 'MethodController',
        'parameterNames'       => 'ParameterNames',
        'nameDetail'           => 'NameDetail',
        'returnDetails'        => 'ReturnDetails',
        'parameterTypes'       => 'ParameterTypes',
        'parameterDetails'     => 'ParameterDetails',
        'requestMethods'       => 'RequestMethods',
        'paths'                => 'Paths',
        'parameterDefinitions' => 'ParameterDefinitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }
        if (null !== $this->methodController) {
            $res['MethodController'] = $this->methodController;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = $this->parameterNames;
        }
        if (null !== $this->nameDetail) {
            $res['NameDetail'] = $this->nameDetail;
        }
        if (null !== $this->returnDetails) {
            $res['ReturnDetails'] = $this->returnDetails;
        }
        if (null !== $this->parameterTypes) {
            $res['ParameterTypes'] = $this->parameterTypes;
        }
        if (null !== $this->parameterDetails) {
            $res['ParameterDetails'] = $this->parameterDetails;
        }
        if (null !== $this->requestMethods) {
            $res['RequestMethods'] = $this->requestMethods;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->parameterDefinitions) {
            $res['ParameterDefinitions'] = $this->parameterDefinitions;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }
        if (isset($map['MethodController'])) {
            $model->methodController = $map['MethodController'];
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = $map['ParameterNames'];
        }
        if (isset($map['NameDetail'])) {
            $model->nameDetail = $map['NameDetail'];
        }
        if (isset($map['ReturnDetails'])) {
            $model->returnDetails = $map['ReturnDetails'];
        }
        if (isset($map['ParameterTypes'])) {
            $model->parameterTypes = $map['ParameterTypes'];
        }
        if (isset($map['ParameterDetails'])) {
            $model->parameterDetails = $map['ParameterDetails'];
        }
        if (isset($map['RequestMethods'])) {
            $model->requestMethods = $map['RequestMethods'];
        }
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }
        if (isset($map['ParameterDefinitions'])) {
            $model->parameterDefinitions = $map['ParameterDefinitions'];
        }

        return $model;
    }
}
