<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody\resources\moduleInfo;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The time when the resource was created. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2019-08-01T06:01:23
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the most recent successful drift detection was performed on the stack.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The logical ID of the resource. The logical ID is the resource name that is defined in the template.
     *
     * @example dummy
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The information about the modules from which the resource is created. This parameter is returned only if the resource is created from modules.
     *
     * @var moduleInfo
     */
    public $moduleInfo;

    /**
     * @description The physical ID of the resource.
     *
     * @example d04af923-e6b7-4272-aeaa-47ec9777****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description The drift state of the resource in the most recent successful drift detection. Valid values:
     *
     *   DELETED: The actual configuration of the resource differs from its expected template configuration because the resource is deleted.
     *   MODIFIED: The actual configuration of the resource differs from its expected template configuration.
     *   NOT_CHECKED: Resource Orchestration Service (ROS) has not checked whether the actual configuration of the resource differs from its expected template configuration.
     *   IN_SYNC: The actual configuration of the resource matches its expected template configuration.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @description The resource type.
     *
     * @example ALIYUN::ROS::Stack
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The stack ID.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The stack name.\\
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (_). It must start with a digit or letter.
     * @example test-describe-resource
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The state of the resource. Valid values:
     *
     *   INIT_COMPLETE: The resource is pending to be created.
     *   CREATE_COMPLETE: The resource is created.
     *   CREATE_FAILED: The resource failed to be created.
     *   CREATE_IN_PROGRESS: The resource is being created.
     *   UPDATE_IN_PROGRESS: The resource is being updated.
     *   UPDATE_FAILED: The resource failed to be updated.
     *   UPDATE_COMPLETE: The resource is updated.
     *   DELETE_IN_PROGRESS: The resource is being deleted.
     *   DELETE_FAILED: The resource failed to be deleted.
     *   DELETE_COMPLETE: The resource is deleted.
     *   CHECK_IN_PROGRESS: The resource is being validated.
     *   CHECK_FAILED: The resource failed to be validated.
     *   CHECK_COMPLETE: The resource is validated.
     *   IMPORT_IN_PROGRESS: The resource is being imported.
     *   IMPORT_FAILED: The resource failed to be imported.
     *   IMPORT_COMPLETE: The resource is imported.
     *
     * @example UPDATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the resource is in its current state.
     *
     * @example state changed
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The time when the resource was updated. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2019-08-01T06:01:29
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'logicalResourceId'   => 'LogicalResourceId',
        'moduleInfo'          => 'ModuleInfo',
        'physicalResourceId'  => 'PhysicalResourceId',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'resourceType'        => 'ResourceType',
        'stackId'             => 'StackId',
        'stackName'           => 'StackName',
        'status'              => 'Status',
        'statusReason'        => 'StatusReason',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->moduleInfo) {
            $res['ModuleInfo'] = null !== $this->moduleInfo ? $this->moduleInfo->toMap() : null;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['ModuleInfo'])) {
            $model->moduleInfo = moduleInfo::fromMap($map['ModuleInfo']);
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
