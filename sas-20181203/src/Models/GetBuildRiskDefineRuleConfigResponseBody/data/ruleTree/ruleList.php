<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data\ruleTree;

use AlibabaCloud\Dara\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $ruleKey;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'ruleKey'  => 'RuleKey',
        'ruleName' => 'RuleName',
        'selected' => 'Selected',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleKey) {
            $res['RuleKey'] = $this->ruleKey;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
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
        if (isset($map['RuleKey'])) {
            $model->ruleKey = $map['RuleKey'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
