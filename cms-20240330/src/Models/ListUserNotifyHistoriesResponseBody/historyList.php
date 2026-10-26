<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListUserNotifyHistoriesResponseBody;

use AlibabaCloud\Dara\Model;

class historyList extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $contacts;

    /**
     * @var string
     */
    public $groups;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var bool
     */
    public $noChannel;

    /**
     * @var string
     */
    public $notifyStrategyId;

    /**
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @var string
     */
    public $receiver;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sendType;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'channel' => 'channel',
        'contacts' => 'contacts',
        'groups' => 'groups',
        'incidentId' => 'incidentId',
        'jobId' => 'jobId',
        'noChannel' => 'noChannel',
        'notifyStrategyId' => 'notifyStrategyId',
        'notifyStrategyName' => 'notifyStrategyName',
        'receiver' => 'receiver',
        'result' => 'result',
        'ruleId' => 'ruleId',
        'ruleName' => 'ruleName',
        'sendType' => 'sendType',
        'severity' => 'severity',
        'status' => 'status',
        'subscriptionId' => 'subscriptionId',
        'subscriptionName' => 'subscriptionName',
        'success' => 'success',
        'timestamp' => 'timestamp',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->contacts) {
            $res['contacts'] = $this->contacts;
        }

        if (null !== $this->groups) {
            $res['groups'] = $this->groups;
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->noChannel) {
            $res['noChannel'] = $this->noChannel;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->sendType) {
            $res['sendType'] = $this->sendType;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['contacts'])) {
            $model->contacts = $map['contacts'];
        }

        if (isset($map['groups'])) {
            $model->groups = $map['groups'];
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['noChannel'])) {
            $model->noChannel = $map['noChannel'];
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['receiver'])) {
            $model->receiver = $map['receiver'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['sendType'])) {
            $model->sendType = $map['sendType'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
