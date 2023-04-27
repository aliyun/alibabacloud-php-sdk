<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class ruleGroups extends Model
{
    /**
     * @description The most recent time when the rule group was modified.
     *
     * @example 1664336364000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description Indicates whether the automatic update feature is enabled for the rule group.
     *
     *   1: The automatic update feature is enabled for the rule group.
     *   2: The automatic update feature is disabled for the rule group.
     *
     * @example 1
     *
     * @var int
     */
    public $isSubscribe;

    /**
     * @description The ID of the rule group.
     *
     *   0: The rule group is created from scratch.
     *   1011: The rule group is a strict rule group.
     *   1012: The rule group is a medium rule group.
     *   1013: The rue group is a loose rule group.
     *
     * @example 1012
     *
     * @var int
     */
    public $parentRuleGroupId;

    /**
     * @description The ID of the regular expression rule group.
     *
     * @example 115361
     *
     * @var int
     */
    public $ruleGroupId;

    /**
     * @description The name of the rule group.
     *
     * @example ssssss
     *
     * @var string
     */
    public $ruleGroupName;

    /**
     * @description The number of built-in rules in the rule group.
     *
     * @example 4444
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ruleGroups
     */
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
