<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRuleResponseBody;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @example custom_acl
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @example 2021-12-29T17:08:45Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 200001
     *
     * @var int
     */
    public $policyId;

    /**
     * @example {\"action\":\"monitor\",\"actionExternal\":\"{}\",\"ccStatus\":1,\"conditions\":[{\"key\":\"URL\",\"opValue\":\"eq\",\"targetKey\":\"request_uri\",\"values\":\"/example\"},{\"key\":\"Header\",\"opValue\":\"eq\",\"subKey\":\"trt\",\"targetKey\":\"header.trt\",\"values\":\"3333\"}],\"effect\":\"service\",\"name\":\"aaa333\",\"origin\":\"custom\",\"ratelimit\":{\"interval\":5,\"status\":{\"code\":404,\"count\":2,\"stat\":{\"mode\":\"count\",\"value\":2.0}},\"target\":\"remote_addr\",\"threshold\":2,\"ttl\":1800}}
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @example 100001
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example rule_1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example on
     *
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'gmtModified'  => 'GmtModified',
        'policyId'     => 'PolicyId',
        'ruleConfig'   => 'RuleConfig',
        'ruleId'       => 'RuleId',
        'ruleName'     => 'RuleName',
        'ruleStatus'   => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
