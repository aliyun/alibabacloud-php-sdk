<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data\scope;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data\whitelist;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleSwitch;

    /**
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
        'aliUid' => 'AliUid',
        'description' => 'Description',
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'id' => 'Id',
        'ruleAction' => 'RuleAction',
        'ruleName' => 'RuleName',
        'ruleSwitch' => 'RuleSwitch',
        'ruleType' => 'RuleType',
        'scope' => 'Scope',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->scope)) {
            Model::validateArray($this->scope);
        }
        if (null !== $this->whitelist) {
            $this->whitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scope)) {
                $res['Scope'] = [];
                $n1 = 0;
                foreach ($this->scope as $item1) {
                    $res['Scope'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whitelist) {
            $res['Whitelist'] = null !== $this->whitelist ? $this->whitelist->toArray($noStream) : $this->whitelist;
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
                $n1 = 0;
                foreach ($map['Scope'] as $item1) {
                    $model->scope[$n1] = scope::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Whitelist'])) {
            $model->whitelist = whitelist::fromMap($map['Whitelist']);
        }

        return $model;
    }
}
