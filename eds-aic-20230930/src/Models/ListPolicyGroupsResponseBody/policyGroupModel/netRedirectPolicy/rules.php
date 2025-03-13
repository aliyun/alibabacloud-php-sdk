<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel\netRedirectPolicy;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The type of the rule.
     *
     * Valid values:
     *
     *   prc: an application package name.
     *   domain: a domain name.
     *
     * @example domain
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The name of the application package or domain name.
     *
     * @example *.example.com
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'ruleType' => 'RuleType',
        'target'   => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
