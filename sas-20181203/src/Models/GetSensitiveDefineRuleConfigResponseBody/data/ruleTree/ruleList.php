<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSensitiveDefineRuleConfigResponseBody\data\ruleTree;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The keyword of the check rule.
     *
     * @example huaweicloud_ak
     *
     * @var string
     */
    public $ruleKey;

    /**
     * @description The name of the check rule.
     *
     * @example huaweicloud_ak
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Indicates whether the check rule is selected. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ruleList
     */
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
