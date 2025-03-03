<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventTracesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var int
     */
    public $actionTime;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventSource;
    /**
     * @var string
     */
    public $notifyLatency;
    /**
     * @var string
     */
    public $notifyStatus;
    /**
     * @var int
     */
    public $notifyTime;
    /**
     * @var int
     */
    public $receivedTime;
    /**
     * @var string
     */
    public $ruleMatchingTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
