<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ARN of the event rule. The ARN is used for authorization.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/MNSRule
     *
     * @var string
     */
    public $ruleARN;
    protected $_name = [
        'ruleARN' => 'RuleARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleARN) {
            $res['RuleARN'] = $this->ruleARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleARN'])) {
            $model->ruleARN = $map['RuleARN'];
        }

        return $model;
    }
}
