<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventCenterRuleRequest extends Model
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
     * @var string[]
     */
    public $namespaces;

    /**
     * @var string[]
     */
    public $repoNames;

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
        'namespaces' => 'Namespaces',
        'repoNames' => 'RepoNames',
        'repoTagFilterPattern' => 'RepoTagFilterPattern',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        if (\is_array($this->repoNames)) {
            Model::validateArray($this->repoNames);
        }
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

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->repoNames) {
            if (\is_array($this->repoNames)) {
                $res['RepoNames'] = [];
                $n1 = 0;
                foreach ($this->repoNames as $item1) {
                    $res['RepoNames'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RepoNames'])) {
            if (!empty($map['RepoNames'])) {
                $model->repoNames = [];
                $n1 = 0;
                foreach ($map['RepoNames'] as $item1) {
                    $model->repoNames[$n1++] = $item1;
                }
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
