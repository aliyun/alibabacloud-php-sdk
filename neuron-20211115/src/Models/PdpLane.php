<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpLane extends Model
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
    public $creatorName;

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
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $initGroupFlag;

    /**
     * @var PdpServiceInfo[]
     */
    public $inletServices;

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
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RuleCondition[]
     */
    public $ruleConditions;

    /**
     * @var string
     */
    public $ruleConnectType;

    /**
     * @var ServiceGroupInfo[]
     */
    public $serviceGroups;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'alias',
        'companyId' => 'companyId',
        'creatorName' => 'creatorName',
        'creatorUid' => 'creatorUid',
        'customeMarkingRules' => 'customeMarkingRules',
        'description' => 'description',
        'env' => 'env',
        'id' => 'id',
        'initGroupFlag' => 'initGroupFlag',
        'inletServices' => 'inletServices',
        'markingRuleType' => 'markingRuleType',
        'name' => 'name',
        'productId' => 'productId',
        'productName' => 'productName',
        'requestId' => 'requestId',
        'ruleConditions' => 'ruleConditions',
        'ruleConnectType' => 'ruleConnectType',
        'serviceGroups' => 'serviceGroups',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->inletServices)) {
            Model::validateArray($this->inletServices);
        }
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        if (\is_array($this->serviceGroups)) {
            Model::validateArray($this->serviceGroups);
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

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->initGroupFlag) {
            $res['initGroupFlag'] = $this->initGroupFlag;
        }

        if (null !== $this->inletServices) {
            if (\is_array($this->inletServices)) {
                $res['inletServices'] = [];
                $n1 = 0;
                foreach ($this->inletServices as $item1) {
                    $res['inletServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (null !== $this->serviceGroups) {
            if (\is_array($this->serviceGroups)) {
                $res['serviceGroups'] = [];
                $n1 = 0;
                foreach ($this->serviceGroups as $item1) {
                    $res['serviceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['initGroupFlag'])) {
            $model->initGroupFlag = $map['initGroupFlag'];
        }

        if (isset($map['inletServices'])) {
            if (!empty($map['inletServices'])) {
                $model->inletServices = [];
                $n1 = 0;
                foreach ($map['inletServices'] as $item1) {
                    $model->inletServices[$n1] = PdpServiceInfo::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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

        if (isset($map['serviceGroups'])) {
            if (!empty($map['serviceGroups'])) {
                $model->serviceGroups = [];
                $n1 = 0;
                foreach ($map['serviceGroups'] as $item1) {
                    $model->serviceGroups[$n1] = ServiceGroupInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
