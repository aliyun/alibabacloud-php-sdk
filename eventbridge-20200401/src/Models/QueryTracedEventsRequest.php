<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class QueryTracedEventsRequest extends Model
{
    /**
     * @description The end of the time range when event traces are queried. Unit: milliseconds.
     *
     * @example 1661773509000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the event bus.
     *
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event source.
     *
     * @example mse
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The event type.
     *
     * @example eventbridge:Events:HTTPEvent
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The maximum number of entries to be returned in a call. You can use this parameter and NextToken to implement paging. Up to 100 entries can be returned in a call.
     *
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the event rule that is matched.
     *
     * @example test-mnsrule
     *
     * @var string
     */
    public $matchedRule;

    /**
     * @description If you configure Limit and excess return values exist, this parameter is returned.
     *
     * @example 1000
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The beginning of the time range to query event traces. Unit: milliseconds.
     *
     * @example 1661773509000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'eventBusName' => 'EventBusName',
        'eventSource'  => 'EventSource',
        'eventType'    => 'EventType',
        'limit'        => 'Limit',
        'matchedRule'  => 'MatchedRule',
        'nextToken'    => 'NextToken',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->matchedRule) {
            $res['MatchedRule'] = $this->matchedRule;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTracedEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MatchedRule'])) {
            $model->matchedRule = $map['MatchedRule'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
