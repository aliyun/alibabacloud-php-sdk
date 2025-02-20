<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody\workflow;

use AlibabaCloud\Dara\Model;

class workflowActions extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nextWorkflowStatusIdentifier;
    /**
     * @var string
     */
    public $workflowIdentifier;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
