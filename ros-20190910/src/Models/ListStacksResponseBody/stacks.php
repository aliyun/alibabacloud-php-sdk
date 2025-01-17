<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\operationInfo;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponseBody\stacks\tags;

class stacks extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $deletionProtection;
    /**
     * @var bool
     */
    public $disableRollback;
    /**
     * @var string
     */
    public $driftDetectionTime;
    /**
     * @var operationInfo
     */
    public $operationInfo;
    /**
     * @var string
     */
    public $parentStackId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var bool
     */
    public $serviceManaged;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $stackDriftStatus;
    /**
     * @var string
     */
    public $stackId;
    /**
     * @var string
     */
    public $stackName;
    /**
     * @var string
     */
    public $stackType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusReason;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $timeoutInMinutes;
    /**
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
        if (null !== $this->operationInfo) {
            $this->operationInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['OperationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toArray($noStream) : $this->operationInfo;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
