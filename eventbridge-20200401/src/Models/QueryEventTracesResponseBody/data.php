<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventTracesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the event trace. Valid values: PutEvent: a delivery event. FilterEvent: a filtering event. PushEvent: a pushing event.
     *
     * @example PutEvent
     *
     * @var string
     */
    public $action;

    /**
     * @description The execution time of the event trace.
     *
     * @example 1659495343896
     *
     * @var int
     */
    public $actionTime;

    /**
     * @description The endpoint of the event target. This parameter is returned if the value of the Action parameter is PushEvent.
     *
     * @example acs:mns:cn-zhangjiakou:123456789098****:queues/testQueue
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The name of the event bus.
     *
     * @example demo
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event ID.
     *
     * @example a5747e4f-2af2-40b6-b262-d0140e995bf7
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The name of the event source.
     *
     * @example cert-api
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The delivery delay of the event target. This parameter is returned if the value of the Action parameter is PushEvent.
     *
     * @example 80
     *
     * @var string
     */
    public $notifyLatency;

    /**
     * @description The event target delivery status.
     *
     * @example [200]Ok
     *
     * @var string
     */
    public $notifyStatus;

    /**
     * @description The delivery time of the event target. This parameter is returned if the value of the Action parameter is PushEvent.
     *
     * @example 1659495343896
     *
     * @var int
     */
    public $notifyTime;

    /**
     * @description The time when the event was delivered to the event bus. This parameter is returned if the value of the Action parameter is PutEvent.
     *
     * @example 1659495343896
     *
     * @var int
     */
    public $receivedTime;

    /**
     * @description The time when the event rule was matched. This parameter is returned if the value of the Action parameter is FilterEvent.
     *
     * @example 1659495343896
     *
     * @var string
     */
    public $ruleMatchingTime;

    /**
     * @description The name of the event rule.
     *
     * @example ramrolechange-mns
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'action'           => 'Action',
        'actionTime'       => 'ActionTime',
        'endpoint'         => 'Endpoint',
        'eventBusName'     => 'EventBusName',
        'eventId'          => 'EventId',
        'eventSource'      => 'EventSource',
        'notifyLatency'    => 'NotifyLatency',
        'notifyStatus'     => 'NotifyStatus',
        'notifyTime'       => 'NotifyTime',
        'receivedTime'     => 'ReceivedTime',
        'ruleMatchingTime' => 'RuleMatchingTime',
        'ruleName'         => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->notifyLatency) {
            $res['NotifyLatency'] = $this->notifyLatency;
        }
        if (null !== $this->notifyStatus) {
            $res['NotifyStatus'] = $this->notifyStatus;
        }
        if (null !== $this->notifyTime) {
            $res['NotifyTime'] = $this->notifyTime;
        }
        if (null !== $this->receivedTime) {
            $res['ReceivedTime'] = $this->receivedTime;
        }
        if (null !== $this->ruleMatchingTime) {
            $res['RuleMatchingTime'] = $this->ruleMatchingTime;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['NotifyLatency'])) {
            $model->notifyLatency = $map['NotifyLatency'];
        }
        if (isset($map['NotifyStatus'])) {
            $model->notifyStatus = $map['NotifyStatus'];
        }
        if (isset($map['NotifyTime'])) {
            $model->notifyTime = $map['NotifyTime'];
        }
        if (isset($map['ReceivedTime'])) {
            $model->receivedTime = $map['ReceivedTime'];
        }
        if (isset($map['RuleMatchingTime'])) {
            $model->ruleMatchingTime = $map['RuleMatchingTime'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
