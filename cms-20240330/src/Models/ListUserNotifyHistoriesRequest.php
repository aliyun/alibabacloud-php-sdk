<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListUserNotifyHistoriesRequest extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $bizSource;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $channelCategory;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var bool
     */
    public $includeNoChannel;

    /**
     * @var bool
     */
    public $isDesc;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

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
    public $partitionKey;

    /**
     * @var string
     */
    public $receiver;

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
    public $to;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'batchId' => 'batchId',
        'bizSource' => 'bizSource',
        'channel' => 'channel',
        'channelCategory' => 'channelCategory',
        'from' => 'from',
        'group' => 'group',
        'incidentId' => 'incidentId',
        'includeNoChannel' => 'includeNoChannel',
        'isDesc' => 'isDesc',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'notifyStrategyId' => 'notifyStrategyId',
        'notifyStrategyName' => 'notifyStrategyName',
        'partitionKey' => 'partitionKey',
        'receiver' => 'receiver',
        'ruleId' => 'ruleId',
        'ruleName' => 'ruleName',
        'sendType' => 'sendType',
        'severity' => 'severity',
        'subscriptionId' => 'subscriptionId',
        'subscriptionName' => 'subscriptionName',
        'success' => 'success',
        'to' => 'to',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->bizSource) {
            $res['bizSource'] = $this->bizSource;
        }

        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->channelCategory) {
            $res['channelCategory'] = $this->channelCategory;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->includeNoChannel) {
            $res['includeNoChannel'] = $this->includeNoChannel;
        }

        if (null !== $this->isDesc) {
            $res['isDesc'] = $this->isDesc;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->partitionKey) {
            $res['partitionKey'] = $this->partitionKey;
        }

        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
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

        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['bizSource'])) {
            $model->bizSource = $map['bizSource'];
        }

        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['channelCategory'])) {
            $model->channelCategory = $map['channelCategory'];
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['includeNoChannel'])) {
            $model->includeNoChannel = $map['includeNoChannel'];
        }

        if (isset($map['isDesc'])) {
            $model->isDesc = $map['isDesc'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['partitionKey'])) {
            $model->partitionKey = $map['partitionKey'];
        }

        if (isset($map['receiver'])) {
            $model->receiver = $map['receiver'];
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

        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
