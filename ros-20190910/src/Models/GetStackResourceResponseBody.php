<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackResourceResponseBody extends Model
{
    /**
     * @description The time when the resource was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example 2019-08-01T06:01:23
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the resource.
     *
     * @example no description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the last successful drift detection was performed on the stack.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The logical ID of the resource defined in the template.
     *
     * @example WebServer
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The metadata.
     *
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The physical ID of the resource.
     *
     * @example d04af923-e6b7-4272-aeaa-47ec9777****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of the resource properties.
     *
     * @var mixed[][]
     */
    public $resourceAttributes;

    /**
     * @description The status of the resource in the last successful drift detection. Valid values:
     *
     *   DELETED: The actual configuration of the resource differs from its expected template configuration because the resource is deleted.
     *   MODIFIED: The actual configuration of the resource differs from its expected template configuration.
     *   NOT_CHECKED: ROS has not checked whether the actual configuration of the resource differs from its expected template configuration.
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
     * @example ALIYUN::ROS::WaitConditionHandle
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the stack.
     *
     * @example efdf5c10-96a5-4fd7-ab89-68e7baa2****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack.
     *
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). The name must start with a digit or letter.
     * @example test-describe-resource
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The status of the resource. Valid values:
     *
     *   CREATE_COMPLETE
     *   CREATE_FAILED
     *   CREATE_IN_PROGRESS
     *   UPDATE_IN_PROGRESS
     *   UPDATE_FAILED
     *   UPDATE_COMPLETE
     *   DELETE_IN_PROGRESS
     *   DELETE_FAILED
     *   CHECK_IN_PROGRESS
     *   CHECK_FAILED
     *   CHECK_COMPLETE
     *   IMPORT_IN_PROGRESS
     *   IMPORT_FAILED
     *   IMPORT_COMPLETE
     *
     * @example CREATE_COMPLETE
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
     * @description The time when the resource was updated.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example 2019-08-01T06:01:29
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'logicalResourceId'   => 'LogicalResourceId',
        'metadata'            => 'Metadata',
        'physicalResourceId'  => 'PhysicalResourceId',
        'requestId'           => 'RequestId',
        'resourceAttributes'  => 'ResourceAttributes',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceAttributes) {
            $res['ResourceAttributes'] = $this->resourceAttributes;
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
     * @return GetStackResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceAttributes'])) {
            if (!empty($map['ResourceAttributes'])) {
                $model->resourceAttributes = $map['ResourceAttributes'];
            }
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
