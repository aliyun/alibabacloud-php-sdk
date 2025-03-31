<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventCenterRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $eventChannel;

    /**
     * @var string
     */
    public $eventConfig;

    /**
     * @var string
     */
    public $eventScope;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespacesShrink;

    /**
     * @var string
     */
    public $repoNamesShrink;

    /**
     * @var string
     */
    public $repoTagFilterPattern;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'eventChannel' => 'EventChannel',
        'eventConfig' => 'EventConfig',
        'eventScope' => 'EventScope',
        'eventType' => 'EventType',
        'instanceId' => 'InstanceId',
        'namespacesShrink' => 'Namespaces',
        'repoNamesShrink' => 'RepoNames',
        'repoTagFilterPattern' => 'RepoTagFilterPattern',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->namespacesShrink) {
            $res['Namespaces'] = $this->namespacesShrink;
        }

        if (null !== $this->repoNamesShrink) {
            $res['RepoNames'] = $this->repoNamesShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            $model->namespacesShrink = $map['Namespaces'];
        }

        if (isset($map['RepoNames'])) {
            $model->repoNamesShrink = $map['RepoNames'];
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
