<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsResponseBody;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string
     */
    public $logicalResourceId;
    /**
     * @var string
     */
    public $physicalResourceId;
    /**
     * @var string
     */
    public $resourceType;
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
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
