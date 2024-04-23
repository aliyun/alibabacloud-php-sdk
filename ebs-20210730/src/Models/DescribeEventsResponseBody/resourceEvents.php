<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceEvents extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 1679538083000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example INFO
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @example DiskIOHang
     *
     * @var string
     */
    public $eventName;

    /**
     * @example Alert
     *
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $recommendAction;

    /**
     * @var string
     */
    public $recommendParams;

    /**
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example disk
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 1684204822000
     *
     * @var string
     */
    public $startTime;

    /**
     * @example WillExecute
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'eventLevel'      => 'EventLevel',
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'recommendAction' => 'RecommendAction',
        'recommendParams' => 'RecommendParams',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->recommendAction) {
            $res['RecommendAction'] = $this->recommendAction;
        }
        if (null !== $this->recommendParams) {
            $res['RecommendParams'] = $this->recommendParams;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['RecommendAction'])) {
            $model->recommendAction = $map['RecommendAction'];
        }
        if (isset($map['RecommendParams'])) {
            $model->recommendParams = $map['RecommendParams'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
