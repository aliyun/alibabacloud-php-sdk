<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn;

use AlibabaCloud\Tea\Model;

class defaultDesensitizationRule extends Model
{
    /**
     * @example 101**
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultDesensitizationRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
