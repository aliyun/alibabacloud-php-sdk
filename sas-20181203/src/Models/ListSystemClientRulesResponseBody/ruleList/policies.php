<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\ruleList;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The policy key.
     *
     * @example system_auto_****
     *
     * @var string
     */
    public $policyKey;

    /**
     * @description The name of the policy.
     *
     * @example System self-starting task\\*\\*\\*\\*
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'policyKey'  => 'PolicyKey',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyKey) {
            $res['PolicyKey'] = $this->policyKey;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyKey'])) {
            $model->policyKey = $map['PolicyKey'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
