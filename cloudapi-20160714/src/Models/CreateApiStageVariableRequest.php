<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiStageVariableRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $variableName;

    /**
     * @var bool
     */
    public $supportRoute;

    /**
     * @var string
     */
    public $variableValue;

    /**
     * @var string
     */
    public $stageRouteModel;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'groupId'         => 'GroupId',
        'stageId'         => 'StageId',
        'variableName'    => 'VariableName',
        'supportRoute'    => 'SupportRoute',
        'variableValue'   => 'VariableValue',
        'stageRouteModel' => 'StageRouteModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->supportRoute) {
            $res['SupportRoute'] = $this->supportRoute;
        }
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }
        if (null !== $this->stageRouteModel) {
            $res['StageRouteModel'] = $this->stageRouteModel;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['SupportRoute'])) {
            $model->supportRoute = $map['SupportRoute'];
        }
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }
        if (isset($map['StageRouteModel'])) {
            $model->stageRouteModel = $map['StageRouteModel'];
        }

        return $model;
    }
}
