<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAutoGroupingRuleRequest;

use AlibabaCloud\Dara\Model;

class ruleContents extends Model
{
    /**
     * @var string
     */
    public $autoGroupingScopeCondition;
    /**
     * @var string
     */
    public $ruleContentId;
    /**
     * @var string
     */
    public $targetResourceGroupCondition;
    protected $_name = [
        'autoGroupingScopeCondition'   => 'AutoGroupingScopeCondition',
        'ruleContentId'                => 'RuleContentId',
        'targetResourceGroupCondition' => 'TargetResourceGroupCondition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoGroupingScopeCondition) {
            $res['AutoGroupingScopeCondition'] = $this->autoGroupingScopeCondition;
        }

        if (null !== $this->ruleContentId) {
            $res['RuleContentId'] = $this->ruleContentId;
        }

        if (null !== $this->targetResourceGroupCondition) {
            $res['TargetResourceGroupCondition'] = $this->targetResourceGroupCondition;
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
        if (isset($map['AutoGroupingScopeCondition'])) {
            $model->autoGroupingScopeCondition = $map['AutoGroupingScopeCondition'];
        }

        if (isset($map['RuleContentId'])) {
            $model->ruleContentId = $map['RuleContentId'];
        }

        if (isset($map['TargetResourceGroupCondition'])) {
            $model->targetResourceGroupCondition = $map['TargetResourceGroupCondition'];
        }

        return $model;
    }
}
