<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiStageVariableRequest extends Model
{
    /**
     * @description The ID of the API group.
     *
     * This parameter is required.
     *
     * @example 523e8dc7bbe04613b5b1d726c2a7889d
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the runtime environment.
     *
     * This parameter is required.
     *
     * @example 6EF60BEC-0242-43AF-BB20-270359FB54A7
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The routing model of the environment.
     *
     * @example {
     * "location": "HEAD",
     * "parameterCatalog": "CUSTOM",
     * "parameterType": "String",
     * "serviceParameterName": "TestConstant",
     * "routeMatchSymbol": "IN",
     * "routeRules": [
     * {
     * "conditionValue": "aaa,bbb",
     * "resultValue": "apigateway-test.com"
     * }
     * ]
     * }
     *
     * @deprecated
     *
     * @var string
     */
    public $stageRouteModel;

    /**
     * @description Specifies whether routing is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportRoute;

    /**
     * @description The name of the variable to be added. This parameter is case-sensitive.
     *
     * This parameter is required.
     *
     * @example serverName
     *
     * @var string
     */
    public $variableName;

    /**
     * @description The value of the variable.
     *
     * @example api.domain.com
     *
     * @var string
     */
    public $variableValue;
    protected $_name = [
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
        'stageId' => 'StageId',
        'stageRouteModel' => 'StageRouteModel',
        'supportRoute' => 'SupportRoute',
        'variableName' => 'VariableName',
        'variableValue' => 'VariableValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageRouteModel) {
            $res['StageRouteModel'] = $this->stageRouteModel;
        }
        if (null !== $this->supportRoute) {
            $res['SupportRoute'] = $this->supportRoute;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiStageVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageRouteModel'])) {
            $model->stageRouteModel = $map['StageRouteModel'];
        }
        if (isset($map['SupportRoute'])) {
            $model->supportRoute = $map['SupportRoute'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }

        return $model;
    }
}
