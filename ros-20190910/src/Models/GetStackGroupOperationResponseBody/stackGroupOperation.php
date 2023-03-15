<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation\operationPreferences;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroupOperation extends Model
{
    /**
     * @description The operation that was performed.
     *
     * Valid values:
     *
     *   CREATE
     *   UPDATE
     *   DELETE
     *   DETECT_DRIFT
     *
     * @example DELETE
     *
     * @var string
     */
    public $action;

    /**
     * @description The name of the RAM role that is specified for the administrator account in Resource Orchestration Service (ROS) when you create the stack group that is granted self-managed permissions. If this parameter is not specified, the default value AliyunROSStackGroupAdministrationRole is returned.
     *
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description The time when the operation was initiated.
     *
     * @example 2020-01-20T09:22:3
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The folders in which you want to deploy the stack instances that are granted service-managed permissions.
     *
     * @var deploymentTargets
     */
    public $deploymentTargets;

    /**
     * @description The time when the operation ended.
     *
     * @example 2020-01-20T09:22:4
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the RAM role that is specified for the execution account when you create the stack group that is granted self-managed permissions. The administrator account whose RAM role is AliyunROSStackGroupAdministrationRole assumes this RAM role. If this parameter is not specified, the default value AliyunROSStackGroupExecutionRole is returned.
     *
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The description of the operation.
     *
     * >  This parameter is returned only if the OperationDescription request parameter is specified in the [CreateStackInstances](~~151338~~) operation to create stack instances.
     * @example Create stack instance in hangzhou
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The ID of the operation that was performed on the stack group.
     *
     * @example 6da106ca-1784-4a6f-a7e1-e723863d****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The operation preferences.
     *
     * @var operationPreferences
     */
    public $operationPreferences;

    /**
     * @description Indicates whether the relevant stacks are retained when stack instances are deleted in the stack group.
     *
     * Valid values:
     *
     *   true: The stacks are retained.
     *   false: The stacks are deleted. Proceed with caution.
     *
     * >  This parameter is returned only when the stack instances are deleted.
     * @example true
     *
     * @var bool
     */
    public $retainStacks;

    /**
     * @description The details of the drift detection.
     *
     * >  This parameter is returned only when the drift detection is performed on the stack group.
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @description The ID of the stack group.
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The name of the stack group.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The status of the operation.
     *
     * Valid values:
     *
     *   RUNNING: The operation is being performed.
     *   SUCCEEDED: The operation succeeded.
     *   FAILED: The operation failed.
     *   STOPPING: The operation is being stopped.
     *   STOPPED: The operation is stopped.
     *
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'action'                         => 'Action',
        'administrationRoleName'         => 'AdministrationRoleName',
        'createTime'                     => 'CreateTime',
        'deploymentTargets'              => 'DeploymentTargets',
        'endTime'                        => 'EndTime',
        'executionRoleName'              => 'ExecutionRoleName',
        'operationDescription'           => 'OperationDescription',
        'operationId'                    => 'OperationId',
        'operationPreferences'           => 'OperationPreferences',
        'retainStacks'                   => 'RetainStacks',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'stackGroupId'                   => 'StackGroupId',
        'stackGroupName'                 => 'StackGroupName',
        'status'                         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = null !== $this->operationPreferences ? $this->operationPreferences->toMap() : null;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = operationPreferences::fromMap($map['OperationPreferences']);
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
