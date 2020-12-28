<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models;

use AlibabaCloud\Tea\Model;

class LookupEventsRequest extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var string
     */
    public $eventAccessKeyId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'event'            => 'Event',
        'request'          => 'Request',
        'eventType'        => 'EventType',
        'serviceName'      => 'ServiceName',
        'eventName'        => 'EventName',
        'user'             => 'User',
        'resourceType'     => 'ResourceType',
        'resourceName'     => 'ResourceName',
        'eventRW'          => 'EventRW',
        'eventAccessKeyId' => 'EventAccessKeyId',
        'nextToken'        => 'NextToken',
        'maxResults'       => 'MaxResults',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->eventAccessKeyId) {
            $res['EventAccessKeyId'] = $this->eventAccessKeyId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LookupEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['EventAccessKeyId'])) {
            $model->eventAccessKeyId = $map['EventAccessKeyId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
