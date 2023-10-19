<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\operationInfo;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\tags;
use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @description The time when the stack was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-03-10T06:44:36
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description Indicates whether rollback is disabled when the stack fails to be created. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The time when the most recent successful drift detection was performed on the stack.
     *
     * @example 2022-03-10T06:46:36
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The supplementary information that is returned when an error occurs on a stack operation.
     *
     * > This parameter is returned only if an error occurs on a stack operation. The system returns at least one sub-property. For example, an error occurred when an API operation of another Alibaba Cloud service was called.
     * @var operationInfo
     */
    public $operationInfo;

    /**
     * @description The ID of the parent stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2frunvw7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the stack is a managed stack. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The name of the service to which the managed stack belongs.
     *
     * @example ACVS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The state of the stack on which the most recent successful drift detection was performed. Valid values:
     *
     *   DRIFTED: The stack has drifted.
     *   NOT_CHECKED: No successful drift detection is performed on the stack.
     *   IN_SYNC: The stack is being synchronized.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description The stack ID.
     *
     * @example 67805444-a605-45ee-a57f-83908ff6****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The stack name.
     *
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The stack type. Valid values:
     *
     *   ROS: Resource Orchestration Service (ROS) stack. The stack is created by using a ROS template.
     *   Terraform: Terraform stack. The stack is created by using a Terraform template.
     *
     * @example ROS
     *
     * @var string
     */
    public $stackType;

    /**
     * @description The state of the stack.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the stack is in its current state.
     *
     * @example Stack CREATE completed successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The tags of the stack.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The timeout period that is allowed to create the stack. Unit: minutes.
     *
     * @example 60
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description The time when the stack was updated. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-03-10T07:44:36
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'deletionProtection' => 'DeletionProtection',
        'disableRollback'    => 'DisableRollback',
        'driftDetectionTime' => 'DriftDetectionTime',
        'operationInfo'      => 'OperationInfo',
        'parentStackId'      => 'ParentStackId',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'serviceManaged'     => 'ServiceManaged',
        'serviceName'        => 'ServiceName',
        'stackDriftStatus'   => 'StackDriftStatus',
        'stackId'            => 'StackId',
        'stackName'          => 'StackName',
        'stackType'          => 'StackType',
        'status'             => 'Status',
        'statusReason'       => 'StatusReason',
        'tags'               => 'Tags',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
        'updateTime'         => 'UpdateTime',
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
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->operationInfo) {
            $res['OperationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toMap() : null;
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackType) {
            $res['StackType'] = $this->stackType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['OperationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['OperationInfo']);
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackType'])) {
            $model->stackType = $map['StackType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
