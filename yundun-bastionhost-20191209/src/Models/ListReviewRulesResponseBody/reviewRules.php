<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListReviewRulesResponseBody;

use AlibabaCloud\Dara\Model;

class reviewRules extends Model
{
    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $reviewRuleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $scopeType;
    protected $_name = [
        'remark' => 'Remark',
        'reviewRuleId' => 'ReviewRuleId',
        'ruleName' => 'RuleName',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->reviewRuleId) {
            $res['ReviewRuleId'] = $this->reviewRuleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ReviewRuleId'])) {
            $model->reviewRuleId = $map['ReviewRuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
