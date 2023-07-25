<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchModifyDcdnWafRulesRequest extends Model
{
    /**
     * @description The ID of the protection policy.
     *
     * @example 10000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The configurations of the protection rule.
     *
     * @example [{"id":135,"type":"web_sdk","status":"on","config":{"mode":"automatic","crossDomain":"example.com"},"action":""},{"id":149,"type":"intelligence_fake_crawler","status":"on","config":{},"action":"deny"}]
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
     * @return BatchModifyDcdnWafRulesRequest
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
