<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteApiStageVariableRequest extends Model
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
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'stageId'       => 'StageId',
        'variableName'  => 'VariableName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApiStageVariableRequest
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

        return $model;
    }
}
