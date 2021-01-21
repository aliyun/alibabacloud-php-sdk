<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $stackName;
    protected $_name = [
        'status'              => 'Status',
        'logicalResourceId'   => 'LogicalResourceId',
        'updateTime'          => 'UpdateTime',
        'stackId'             => 'StackId',
        'physicalResourceId'  => 'PhysicalResourceId',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'resourceType'        => 'ResourceType',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'statusReason'        => 'StatusReason',
        'createTime'          => 'CreateTime',
        'stackName'           => 'StackName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }

        return $model;
    }
}
