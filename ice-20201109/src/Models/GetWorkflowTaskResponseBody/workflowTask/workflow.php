<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody\workflowTask;

use AlibabaCloud\Tea\Model;

class workflow extends Model
{
    /**
     * @description The time when the workflow was created.
     *
     * @example 2022-11-27T10:02:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the workflow was last modified.
     *
     * @example 2022-11-29T02:06:19Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The workflow name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The workflow state.
     *
     * Valid values:
     *
     *   Active
     *   Inactive
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The workflow type.
     *
     * Valid values:
     *
     *   Customize: custom workflow.
     *   System: system workflow.
     *   Common: user-created workflow.
     *
     * @example Common
     *
     * @var string
     */
    public $type;

    /**
     * @description The workflow ID.
     *
     * @example ******63dca94c609de02ac0d1******
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'status' => 'Status',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
