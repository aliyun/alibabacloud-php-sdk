<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\operationInfo;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\tags;
use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @example 2022-03-10T06:44:36
     *
     * @var string
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @example 2022-03-10T06:46:36
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var operationInfo
     */
    public $operationInfo;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aek2frunvw7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @example ACVS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @example 67805444-a605-45ee-a57f-83908ff6****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @example ROS
     *
     * @var string
     */
    public $stackType;

    /**
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @example Stack CREATE completed successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @example 2022-03-10T07:44:36
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
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
