<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest\netRedirectPolicy;

use AlibabaCloud\Tea\Model;

class netRedirectRule extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'policy'   => 'Policy',
        'ruleType' => 'RuleType',
        'target'   => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netRedirectRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
