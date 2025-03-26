<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Dara\Model;

class netRedirectRule extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'domain' => 'Domain',
        'policy' => 'Policy',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
