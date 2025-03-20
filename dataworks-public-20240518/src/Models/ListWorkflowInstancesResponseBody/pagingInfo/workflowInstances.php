<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class workflowInstances extends Model
{
    /**
     * @description 业务日期。
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The creation time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The account ID of the creator.
     *
     * @example 100
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod
     *   Dev
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The time when the instance finished running.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $finishedTime;

    /**
     * @description The workflow instance ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The modification time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The account ID of the modifier.
     *
     * @example 100
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The name of the workflow instance.
     *
     * @example WorkflowInstance1
     *
     * @var string
     */
    public $name;

    /**
     * @description The workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The time when the instance started to run.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $startedTime;

    /**
     * @description The status of the workflow instance. Valid values:
     *
     *   NotRun: The instance is not run.
     *   Running: The instance is running.
     *   WaitTime: The instance is waiting for the scheduling time to arrive.
     *   CheckingCondition: Branch conditions are being checked for the instance.
     *   WaitResource: The instance is waiting for resources.
     *   Failure: The instance fails to be run.
     *   Success: The instance is successfully run.
     *   Checking: Data quality is being checked for the instance.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description 工作流实例的类型。
     * - Normal：周期调度
     * - Manual：手动任务
     * - SmokeTest：测试
     * - SupplementData：补数据
     * - ManualWorkflow：手动工作流
     *
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the workflow to which the instance belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'envType' => 'EnvType',
        'finishedTime' => 'FinishedTime',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'startedTime' => 'StartedTime',
        'status' => 'Status',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
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
     * @return workflowInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
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
