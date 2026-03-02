<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpLaneUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $customeMarkingRules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $initGroupFlag;

    /**
     * @var string
     */
    public $inletServiceIds;

    /**
     * @var string
     */
    public $markingRuleType;

    /**
     * @var RuleCondition[]
     */
    public $ruleConditions;

    /**
     * @var string
     */
    public $ruleConnectType;

    /**
     * @var string
     */
    public $serviceGroupIds;
    protected $_name = [
        'alias' => 'alias',
        'customeMarkingRules' => 'customeMarkingRules',
        'description' => 'description',
        'id' => 'id',
        'initGroupFlag' => 'initGroupFlag',
        'inletServiceIds' => 'inletServiceIds',
        'markingRuleType' => 'markingRuleType',
        'ruleConditions' => 'ruleConditions',
        'ruleConnectType' => 'ruleConnectType',
        'serviceGroupIds' => 'serviceGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->customeMarkingRules) {
            $res['customeMarkingRules'] = $this->customeMarkingRules;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->initGroupFlag) {
            $res['initGroupFlag'] = $this->initGroupFlag;
        }

        if (null !== $this->inletServiceIds) {
            $res['inletServiceIds'] = $this->inletServiceIds;
        }

        if (null !== $this->markingRuleType) {
            $res['markingRuleType'] = $this->markingRuleType;
        }

        if (null !== $this->ruleConditions) {
            if (\is_array($this->ruleConditions)) {
                $res['ruleConditions'] = [];
                $n1 = 0;
                foreach ($this->ruleConditions as $item1) {
                    $res['ruleConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleConnectType) {
            $res['ruleConnectType'] = $this->ruleConnectType;
        }

        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['customeMarkingRules'])) {
            $model->customeMarkingRules = $map['customeMarkingRules'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['initGroupFlag'])) {
            $model->initGroupFlag = $map['initGroupFlag'];
        }

        if (isset($map['inletServiceIds'])) {
            $model->inletServiceIds = $map['inletServiceIds'];
        }

        if (isset($map['markingRuleType'])) {
            $model->markingRuleType = $map['markingRuleType'];
        }

        if (isset($map['ruleConditions'])) {
            if (!empty($map['ruleConditions'])) {
                $model->ruleConditions = [];
                $n1 = 0;
                foreach ($map['ruleConditions'] as $item1) {
                    $model->ruleConditions[$n1] = RuleCondition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ruleConnectType'])) {
            $model->ruleConnectType = $map['ruleConnectType'];
        }

        if (isset($map['serviceGroupIds'])) {
            $model->serviceGroupIds = $map['serviceGroupIds'];
        }

        return $model;
    }
}
