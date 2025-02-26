<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class ruleGroups extends Model
{
    /**
     * @var int
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $isSubscribe;
    /**
     * @var int
     */
    public $parentRuleGroupId;
    /**
     * @var int
     */
    public $ruleGroupId;
    /**
     * @var string
     */
    public $ruleGroupName;
    /**
     * @var int
     */
    public $ruleTotalCount;
    protected $_name = [
        'gmtModified'       => 'GmtModified',
        'isSubscribe'       => 'IsSubscribe',
        'parentRuleGroupId' => 'ParentRuleGroupId',
        'ruleGroupId'       => 'RuleGroupId',
        'ruleGroupName'     => 'RuleGroupName',
        'ruleTotalCount'    => 'RuleTotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isSubscribe) {
            $res['IsSubscribe'] = $this->isSubscribe;
        }

        if (null !== $this->parentRuleGroupId) {
            $res['ParentRuleGroupId'] = $this->parentRuleGroupId;
        }

        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }

        if (null !== $this->ruleGroupName) {
            $res['RuleGroupName'] = $this->ruleGroupName;
        }

        if (null !== $this->ruleTotalCount) {
            $res['RuleTotalCount'] = $this->ruleTotalCount;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IsSubscribe'])) {
            $model->isSubscribe = $map['IsSubscribe'];
        }

        if (isset($map['ParentRuleGroupId'])) {
            $model->parentRuleGroupId = $map['ParentRuleGroupId'];
        }

        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }

        if (isset($map['RuleGroupName'])) {
            $model->ruleGroupName = $map['RuleGroupName'];
        }

        if (isset($map['RuleTotalCount'])) {
            $model->ruleTotalCount = $map['RuleTotalCount'];
        }

        return $model;
    }
}
