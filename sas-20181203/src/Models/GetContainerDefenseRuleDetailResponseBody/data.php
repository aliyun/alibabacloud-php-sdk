<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data\scope;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data\whitelist;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1766185894104***
     *
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @example EventName
     *
     * @var string
     */
    public $eventName;

    /**
     * @example EventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @example 1948
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @example test-000
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @example 1
     *
     * @var string
     */
    public $ruleType;

    /**
     * @var scope[]
     */
    public $scope;

    /**
     * @var whitelist
     */
    public $whitelist;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'description' => 'Description',
        'eventName'   => 'EventName',
        'eventType'   => 'EventType',
        'id'          => 'Id',
        'ruleAction'  => 'RuleAction',
        'ruleName'    => 'RuleName',
        'ruleSwitch'  => 'RuleSwitch',
        'ruleType'    => 'RuleType',
        'scope'       => 'Scope',
        'whitelist'   => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = [];
            if (null !== $this->scope && \is_array($this->scope)) {
                $n = 0;
                foreach ($this->scope as $item) {
                    $res['Scope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = null !== $this->whitelist ? $this->whitelist->toMap() : null;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n            = 0;
                foreach ($map['Scope'] as $item) {
                    $model->scope[$n++] = null !== $item ? scope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = whitelist::fromMap($map['Whitelist']);
        }

        return $model;
    }
}
