<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateAutoTagRuleRequest extends Model
{
    /**
     * @description Specifies whether to check the rule on the backend. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $checkAll;

    /**
     * @description The expression of the rule.
     *
     * @example [{"groups":"0","fieldValueType":"string","field":"internetIp","operator":"equals","value":"12.0.0.1"}]
     *
     * @var string
     */
    public $expression;

    /**
     * @description The description of the rule.
     *
     * @example describe
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The ID of the rule.
     *
     * >  You can call the [ListAutoTagRules](~~ListAutoTagRules~~) operation to query the ID.
     *
     * @example 300566
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * This parameter is required.
     *
     * @example text-001
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The tag specified by the operation type of the rule.
     *
     *   If TagType is set to group, set this parameter to {"groupId":XXX}. XXX specifies the ID of the group. You can call the [DescribeGroupStruct](~~DescribeGroupStruct~~) operation to query the ID.
     *   If TagType is set to tag, set this parameter to {"tagId":XXX}. XXX specifies the ID of the tag. You can call the [DescribeGroupedTags](~~DescribeGroupedTags~~) operation to query the ID.
     *
     * @example {"tagId":7804789}
     *
     * @var string
     */
    public $tagContext;

    /**
     * @description The operation type of the rule. Valid values:
     *
     *   **group**
     *   **tag**
     *
     * This parameter is required.
     *
     * @example tag
     *
     * @var string
     */
    public $tagType;
    protected $_name = [
        'checkAll' => 'CheckAll',
        'expression' => 'Expression',
        'ruleDesc' => 'RuleDesc',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'tagContext' => 'TagContext',
        'tagType' => 'TagType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkAll) {
            $res['CheckAll'] = $this->checkAll;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->tagContext) {
            $res['TagContext'] = $this->tagContext;
        }
        if (null !== $this->tagType) {
            $res['TagType'] = $this->tagType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAutoTagRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckAll'])) {
            $model->checkAll = $map['CheckAll'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TagContext'])) {
            $model->tagContext = $map['TagContext'];
        }
        if (isset($map['TagType'])) {
            $model->tagType = $map['TagType'];
        }

        return $model;
    }
}
