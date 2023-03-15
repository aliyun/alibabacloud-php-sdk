<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The time when the resource was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2019-08-01T04:07:39
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the event.
     *
     * @example 0086612d-77cf-4056-b0b5-ff8e94ad****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The logical ID of the resource that is defined in the template.
     *
     * @example WebServer
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The physical ID of the resource.
     *
     * @example i-m5e3tfdbinchnexh****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description The resource type.
     *
     * @example ALIYUN::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack.
     *
     * @example StackName
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The state of the resource.
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
    protected $_name = [
        'createTime'         => 'CreateTime',
        'eventId'            => 'EventId',
        'logicalResourceId'  => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'resourceType'       => 'ResourceType',
        'stackId'            => 'StackId',
        'stackName'          => 'StackName',
        'status'             => 'Status',
        'statusReason'       => 'StatusReason',
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
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
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

        return $model;
    }
}
