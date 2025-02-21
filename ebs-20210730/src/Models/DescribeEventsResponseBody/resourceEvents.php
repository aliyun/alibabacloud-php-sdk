<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponseBody;

use AlibabaCloud\Dara\Model;

class resourceEvents extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $eventLevel;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $eventType;
    /**
     * @var string
     */
    public $extraAttributes;
    /**
     * @var string
     */
    public $recommendAction;
    /**
     * @var string
     */
    public $recommendParams;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'eventLevel'      => 'EventLevel',
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'extraAttributes' => 'ExtraAttributes',
        'recommendAction' => 'RecommendAction',
        'recommendParams' => 'RecommendParams',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->extraAttributes) {
            $res['ExtraAttributes'] = $this->extraAttributes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ExtraAttributes'])) {
            $model->extraAttributes = $map['ExtraAttributes'];
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
