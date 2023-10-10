<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceResponseBody\moduleInfo;
use AlibabaCloud\Tea\Model;

class GetStackResourceResponseBody extends Model
{
    /**
     * @description The resource type.
     *
     * @example 2019-08-01T06:01:23
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The reason why the resource is in its current state.
     *
     * @example no description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the stack.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The time when the resource was updated.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example WebServer
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The list of the resource properties.
     *
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The information about the modules from which the resource is created. This parameter is returned only if the resource is created from modules.
     *
     * @var moduleInfo
     */
    public $moduleInfo;

    /**
     * @description The metadata.
     *
     * @example d04af923-e6b7-4272-aeaa-47ec9777****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description The physical ID of the resource.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the resource in the last successful drift detection. Valid values:
     *
     *   DELETED: The actual configuration of the resource differs from its expected template configuration because the resource is deleted.
     *   MODIFIED: The actual configuration of the resource differs from its expected template configuration.
     *   NOT_CHECKED: ROS has not checked whether the actual configuration of the resource differs from its expected template configuration.
     *   IN_SYNC: The actual configuration of the resource matches its expected template configuration.
     *
     * @var mixed[][]
     */
    public $resourceAttributes;

    /**
     * @description The time when the last successful drift detection was performed on the stack.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @description The logical ID of the resource defined in the template.
     *
     * @example ALIYUN::ROS::WaitConditionHandle
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example efdf5c10-96a5-4fd7-ab89-68e7baa2****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example test-describe-resource
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The ID of the request.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the resource was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example state changed
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The name of the stack.
     *
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). The name must start with a digit or letter.
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
        'moduleInfo'          => 'ModuleInfo',
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
        if (null !== $this->moduleInfo) {
            $res['ModuleInfo'] = null !== $this->moduleInfo ? $this->moduleInfo->toMap() : null;
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
        if (isset($map['ModuleInfo'])) {
            $model->moduleInfo = moduleInfo::fromMap($map['ModuleInfo']);
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
