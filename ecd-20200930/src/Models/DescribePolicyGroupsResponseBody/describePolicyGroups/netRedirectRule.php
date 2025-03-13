<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class netRedirectRule extends Model
{
    /**
     * @description The rule content.
     *
     * @example *.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether the rule is allowed.
     *
     * Valid values:
     *
     *   allow
     *   block
     *
     * @example allow
     *
     * @var string
     */
    public $policy;

    /**
     * @description The rule type.
     *
     * Valid values:
     *
     *   prc: process
     *   domain: domain name
     *
     * @example domain
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'domain'   => 'Domain',
        'policy'   => 'Policy',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
