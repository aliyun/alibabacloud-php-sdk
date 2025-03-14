<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAutoTagRulesResponseBody;

use AlibabaCloud\Tea\Model;

class autoTagRuleList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 558463566374****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The timestamp when the rule was created. Unit: milliseconds.
     *
     * @example 1614674401000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The expression of the rule.
     *
     * @example [{\\"groups\\":\\"0\\",\\"fieldValueType\\":\\"string\\",\\"field\\":\\"internetIp\\",\\"operator\\":\\"equals\\",\\"value\\":\\"12.0.0.1\\"}]
     *
     * @var string
     */
    public $expression;

    /**
     * @description The ID of the rule.
     *
     * @example 900029
     *
     * @var int
     */
    public $id;

    /**
     * @description The timestamp when the rule was last updated. Unit: milliseconds.
     *
     * @example 1614674401000
     *
     * @var int
     */
    public $modifiedTimestamp;

    /**
     * @description The description of the rule.
     *
     * @example describe
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The name of the rule.
     *
     * @example auto_test_rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The tag specified by the operation type of the rule.
     *
     * @example {\\"tagId\\":4577447}
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
     * @example group
     *
     * @var string
     */
    public $tagType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createTimestamp' => 'CreateTimestamp',
        'expression' => 'Expression',
        'id' => 'Id',
        'modifiedTimestamp' => 'ModifiedTimestamp',
        'ruleDesc' => 'RuleDesc',
        'ruleName' => 'RuleName',
        'tagContext' => 'TagContext',
        'tagType' => 'TagType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTimestamp) {
            $res['ModifiedTimestamp'] = $this->modifiedTimestamp;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
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
     * @return autoTagRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTimestamp'])) {
            $model->modifiedTimestamp = $map['ModifiedTimestamp'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
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
