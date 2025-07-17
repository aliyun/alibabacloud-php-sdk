<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class RerunWorkflowInstancesShrinkRequest extends Model
{
    /**
     * @description The business date used for matching manual workflow instances.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The end trigger time of the manual workflow instance used for matching. This parameter must be used together with the StartTriggerTime.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $endTriggerTime;

    /**
     * @description The environment of the workspace. Valid values:
     *
     * Prod Dev
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The match conditions for internal instances of manual workflow instances.
     *
     * @var string
     */
    public $filterShrink;

    /**
     * @description The instance IDs used for matching manual workflow instances.
     *
     * @var string
     */
    public $idsShrink;

    /**
     * @description The manual workflow name, used for fuzzy matching.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The project ID.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The start trigger time (creation time) of the manual workflow instance used for matching. This parameter must be used together with EndTriggerTime.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $startTriggerTime;

    /**
     * @description The status used for matching manual workflow instances.
     *
     * Valid values:
     *
     *   Success
     *   Failure
     *
     * @example Failure
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the workflow instance. Valid values:
     *
     * ManualWorkflow.
     *
     * This parameter is required.
     *
     * @example ManualWorkflow
     *
     * @var string
     */
    public $type;

    /**
     * @description The workflow ID.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'bizdate' => 'Bizdate',
        'endTriggerTime' => 'EndTriggerTime',
        'envType' => 'EnvType',
        'filterShrink' => 'Filter',
        'idsShrink' => 'Ids',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'startTriggerTime' => 'StartTriggerTime',
        'status' => 'Status',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->endTriggerTime) {
            $res['EndTriggerTime'] = $this->endTriggerTime;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTriggerTime) {
            $res['StartTriggerTime'] = $this->startTriggerTime;
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
     * @return RerunWorkflowInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['EndTriggerTime'])) {
            $model->endTriggerTime = $map['EndTriggerTime'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTriggerTime'])) {
            $model->startTriggerTime = $map['StartTriggerTime'];
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
