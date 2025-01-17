<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateAutoTagRuleRequest extends Model
{
    /**
     * @var bool
     */
    public $checkAll;
    /**
     * @var string
     */
    public $expression;
    /**
     * @var string
     */
    public $ruleDesc;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $tagContext;
    /**
     * @var string
     */
    public $tagType;
    protected $_name = [
        'checkAll'   => 'CheckAll',
        'expression' => 'Expression',
        'ruleDesc'   => 'RuleDesc',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'tagContext' => 'TagContext',
        'tagType'    => 'TagType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
