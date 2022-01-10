<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody\workflow;

use AlibabaCloud\Tea\Model;

class workflowActions extends Model
{
    /**
     * @description 流转步骤的id
     *
     * @var int
     */
    public $id;

    /**
     * @description action的名称
     *
     * @var string
     */
    public $name;

    /**
     * @description action对应的下个状态的信息id
     *
     * @var string
     */
    public $nextWorkflowStatusIdentifier;

    /**
     * @description action对应的工作流
     *
     * @var string
     */
    public $workflowIdentifier;

    /**
     * @description action对应的当前状态id
     *
     * @var string
     */
    public $workflowStatusIdentifier;
    protected $_name = [
        'id'                           => 'id',
        'name'                         => 'name',
        'nextWorkflowStatusIdentifier' => 'nextWorkflowStatusIdentifier',
        'workflowIdentifier'           => 'workflowIdentifier',
        'workflowStatusIdentifier'     => 'workflowStatusIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nextWorkflowStatusIdentifier) {
            $res['nextWorkflowStatusIdentifier'] = $this->nextWorkflowStatusIdentifier;
        }
        if (null !== $this->workflowIdentifier) {
            $res['workflowIdentifier'] = $this->workflowIdentifier;
        }
        if (null !== $this->workflowStatusIdentifier) {
            $res['workflowStatusIdentifier'] = $this->workflowStatusIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nextWorkflowStatusIdentifier'])) {
            $model->nextWorkflowStatusIdentifier = $map['nextWorkflowStatusIdentifier'];
        }
        if (isset($map['workflowIdentifier'])) {
            $model->workflowIdentifier = $map['workflowIdentifier'];
        }
        if (isset($map['workflowStatusIdentifier'])) {
            $model->workflowStatusIdentifier = $map['workflowStatusIdentifier'];
        }

        return $model;
    }
}
