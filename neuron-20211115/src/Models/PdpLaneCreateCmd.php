<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpLaneCreateCmd extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $creatorUid;

    /**
     * @var string
     */
    public $customeMarkingRules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $env;

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
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $productId;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'alias',
        'companyId' => 'companyId',
        'creatorUid' => 'creatorUid',
        'customeMarkingRules' => 'customeMarkingRules',
        'description' => 'description',
        'env' => 'env',
        'initGroupFlag' => 'initGroupFlag',
        'inletServiceIds' => 'inletServiceIds',
        'markingRuleType' => 'markingRuleType',
        'name' => 'name',
        'productId' => 'productId',
        'ruleConditions' => 'ruleConditions',
        'ruleConnectType' => 'ruleConnectType',
        'serviceGroupIds' => 'serviceGroupIds',
        'type' => 'type',
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

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->creatorUid) {
            $res['creatorUid'] = $this->creatorUid;
        }

        if (null !== $this->customeMarkingRules) {
            $res['customeMarkingRules'] = $this->customeMarkingRules;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['creatorUid'])) {
            $model->creatorUid = $map['creatorUid'];
        }

        if (isset($map['customeMarkingRules'])) {
            $model->customeMarkingRules = $map['customeMarkingRules'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
