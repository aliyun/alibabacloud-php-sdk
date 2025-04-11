<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class CreateApiStageVariableRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageRouteModel;

    /**
     * @var bool
     */
    public $supportRoute;

    /**
     * @var string
     */
    public $variableName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
