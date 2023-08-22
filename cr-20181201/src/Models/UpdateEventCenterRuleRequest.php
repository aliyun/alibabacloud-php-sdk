<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventCenterRuleRequest extends Model
{
    /**
     * @description The event notification channel.
     *
     * @example EVENT_BRIDGE
     *
     * @var string
     */
    public $eventChannel;

    /**
     * @description The event configuration.
     *
     * @example {
     * "Url":"http://www.aliyundoc.com",
     * "id":"MaAV3HgTkO5Fh8l1V********",
     * }
     * @var string
     */
    public $eventConfig;

    /**
     * @description The event scope. Valid values:
     *
     *   `INSTANCE`
     *   `NAMESPACE`
     *   `REPO`
     *
     * Default value: `INSTANCE`
     * @example INSTANCE
     *
     * @var string
     */
    public $eventScope;

    /**
     * @description The type of the event. Valid values:
     *
     *   `cr:Artifact:DeliveryChainCompleted`: The delivery chain is processed.
     *   `cr:Artifact:SynchronizationCompleted`: The image is replicated.
     *   `cr:Artifact:BuildCompleted`: The image is built.
     *   `cr:Artifact:ScanCompleted`: The image is scanned.
     *   `cr:Artifact:SigningCompleted`: The image is signed.
     *
     * @example cr:Artifact:DeliveryChainCompleted
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The namespaces to which the event notification rule applies.
     *
     * @example ns
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @description The names of the repositories to which the event notification rule applies.
     *
     * @example reponame
     *
     * @var string[]
     */
    public $repoNames;

    /**
     * @description The regular expression for image tags.
     *
     * @example .*
     *
     * @var string
     */
    public $repoTagFilterPattern;

    /**
     * @description The ID of the event notification rule.
     *
     * @example crecr-n6pbhgjxt*****
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
    protected $_name = [
        'eventChannel'         => 'EventChannel',
        'eventConfig'          => 'EventConfig',
        'eventScope'           => 'EventScope',
        'eventType'            => 'EventType',
        'instanceId'           => 'InstanceId',
        'namespaces'           => 'Namespaces',
        'repoNames'            => 'RepoNames',
        'repoTagFilterPattern' => 'RepoTagFilterPattern',
        'ruleId'               => 'RuleId',
        'ruleName'             => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventChannel) {
            $res['EventChannel'] = $this->eventChannel;
        }
        if (null !== $this->eventConfig) {
            $res['EventConfig'] = $this->eventConfig;
        }
        if (null !== $this->eventScope) {
            $res['EventScope'] = $this->eventScope;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
        }
        if (null !== $this->repoNames) {
            $res['RepoNames'] = $this->repoNames;
        }
        if (null !== $this->repoTagFilterPattern) {
            $res['RepoTagFilterPattern'] = $this->repoTagFilterPattern;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEventCenterRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventChannel'])) {
            $model->eventChannel = $map['EventChannel'];
        }
        if (isset($map['EventConfig'])) {
            $model->eventConfig = $map['EventConfig'];
        }
        if (isset($map['EventScope'])) {
            $model->eventScope = $map['EventScope'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
        }
        if (isset($map['RepoNames'])) {
            if (!empty($map['RepoNames'])) {
                $model->repoNames = $map['RepoNames'];
            }
        }
        if (isset($map['RepoTagFilterPattern'])) {
            $model->repoTagFilterPattern = $map['RepoTagFilterPattern'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
