<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageResponseBody\data\result\returnDefinition;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $parameterDetails;

    /**
     * @var string
     */
    public $parameterNames;

    /**
     * @var string
     */
    public $paths;

    /**
     * @var string
     */
    public $parameterTypes;

    /**
     * @var string
     */
    public $returnType;

    /**
     * @var string
     */
    public $nameDetail;

    /**
     * @var string
     */
    public $parameterDefinitions;

    /**
     * @var returnDefinition
     */
    public $returnDefinition;

    /**
     * @var string
     */
    public $requestMethods;

    /**
     * @var string
     */
    public $returnDetails;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $methodController;
    protected $_name = [
        'parameterDetails'     => 'ParameterDetails',
        'parameterNames'       => 'ParameterNames',
        'paths'                => 'Paths',
        'parameterTypes'       => 'ParameterTypes',
        'returnType'           => 'ReturnType',
        'nameDetail'           => 'NameDetail',
        'parameterDefinitions' => 'ParameterDefinitions',
        'returnDefinition'     => 'ReturnDefinition',
        'requestMethods'       => 'RequestMethods',
        'returnDetails'        => 'ReturnDetails',
        'name'                 => 'Name',
        'methodController'     => 'MethodController',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterDetails) {
            $res['ParameterDetails'] = $this->parameterDetails;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = $this->parameterNames;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->parameterTypes) {
            $res['ParameterTypes'] = $this->parameterTypes;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }
        if (null !== $this->nameDetail) {
            $res['NameDetail'] = $this->nameDetail;
        }
        if (null !== $this->parameterDefinitions) {
            $res['ParameterDefinitions'] = $this->parameterDefinitions;
        }
        if (null !== $this->returnDefinition) {
            $res['ReturnDefinition'] = null !== $this->returnDefinition ? $this->returnDefinition->toMap() : null;
        }
        if (null !== $this->requestMethods) {
            $res['RequestMethods'] = $this->requestMethods;
        }
        if (null !== $this->returnDetails) {
            $res['ReturnDetails'] = $this->returnDetails;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->methodController) {
            $res['MethodController'] = $this->methodController;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterDetails'])) {
            $model->parameterDetails = $map['ParameterDetails'];
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = $map['ParameterNames'];
        }
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }
        if (isset($map['ParameterTypes'])) {
            $model->parameterTypes = $map['ParameterTypes'];
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }
        if (isset($map['NameDetail'])) {
            $model->nameDetail = $map['NameDetail'];
        }
        if (isset($map['ParameterDefinitions'])) {
            $model->parameterDefinitions = $map['ParameterDefinitions'];
        }
        if (isset($map['ReturnDefinition'])) {
            $model->returnDefinition = returnDefinition::fromMap($map['ReturnDefinition']);
        }
        if (isset($map['RequestMethods'])) {
            $model->requestMethods = $map['RequestMethods'];
        }
        if (isset($map['ReturnDetails'])) {
            $model->returnDetails = $map['ReturnDetails'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['MethodController'])) {
            $model->methodController = $map['MethodController'];
        }

        return $model;
    }
}
