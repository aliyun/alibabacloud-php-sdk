<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateDcdnWafRulesRequest extends Model
{
    /**
     * @description The ID of the protection policy.
     *
     * @example 1000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The configurations of the protection rule.
     *
     * @example {"name":"ttttt","action":"monitor","conditions":[{"key":"URL","opValue":"match-one","values":"1,2,3,4,5"},{"key":"Header","opValue":"contain-one","subKey":"testheader","values":"6,7,8,9,10"}],"ratelimit":{"target":"header","interval":10,"threshold":5,"ttl":1800,"subKey":"testheadercc","status":{"code":"502","count":5}},"ccStatus":"on","effect":"rule","status":"on"}
     *
     * @var string
     */
    public $ruleConfigs;
    protected $_name = [
        'policyId'    => 'PolicyId',
        'ruleConfigs' => 'RuleConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleConfigs) {
            $res['RuleConfigs'] = $this->ruleConfigs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDcdnWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleConfigs'])) {
            $model->ruleConfigs = $map['RuleConfigs'];
        }

        return $model;
    }
}
