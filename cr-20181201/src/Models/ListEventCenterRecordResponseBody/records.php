<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRecordResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The time when the event was created.
     *
     * @example 1638188622000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The event notification channel.
     *
     * @example EVENT_BRIDGE
     *
     * @var string
     */
    public $eventChannel;

    /**
     * @description The ID of the event notification.
     *
     * @example 7d478419-61df-49e5-b92b-30ce730c2127
     *
     * @var string
     */
    public $eventNotifyId;

    /**
     * @description The notification method. Valid values:
     *
     *   `http`: The notification is sent over HTTP.
     *   `https`: The notification is sent over HTTPS.
     *   `dingding`: The notification is sent by using DingTalk.
     *
     * @example http
     *
     * @var string
     */
    public $eventNotifyMethod;

    /**
     * @description The type of the event.
     *
     * @example cr:Artifact:DeliveryChainCompleted
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the instance.
     *
     * @example cri-gl34plsa****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The namespace.
     *
     * @example mychain
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the event record.
     *
     * @example crecrr-ctdbzwtkpr*****
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The name of the image repository.
     *
     * @example ruby-2.4.0
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The ID of the event notification rule.
     *
     * @example crecr-n6pbhgjxtla*****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the event notification rule.
     *
     * @example chain-demo
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The tags.
     *
     * @example ruby-2.4.0
     *
     * @var string
     */
    public $tag;

    /**
     * @description The time when the event was last updated.
     *
     * @example 1638188622000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'eventChannel'      => 'EventChannel',
        'eventNotifyId'     => 'EventNotifyId',
        'eventNotifyMethod' => 'EventNotifyMethod',
        'eventType'         => 'EventType',
        'instanceId'        => 'InstanceId',
        'namespace'         => 'Namespace',
        'recordId'          => 'RecordId',
        'repoName'          => 'RepoName',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
        'tag'               => 'Tag',
        'updateTime'        => 'UpdateTime',
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
        if (null !== $this->eventChannel) {
            $res['EventChannel'] = $this->eventChannel;
        }
        if (null !== $this->eventNotifyId) {
            $res['EventNotifyId'] = $this->eventNotifyId;
        }
        if (null !== $this->eventNotifyMethod) {
            $res['EventNotifyMethod'] = $this->eventNotifyMethod;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EventChannel'])) {
            $model->eventChannel = $map['EventChannel'];
        }
        if (isset($map['EventNotifyId'])) {
            $model->eventNotifyId = $map['EventNotifyId'];
        }
        if (isset($map['EventNotifyMethod'])) {
            $model->eventNotifyMethod = $map['EventNotifyMethod'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
