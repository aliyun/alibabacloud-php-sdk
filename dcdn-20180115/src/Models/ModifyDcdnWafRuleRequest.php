<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDcdnWafRuleRequest extends Model
{
    /**
     * @example {\"origin\":\"custom\",\"conditions\":[{\"opValue\":\"eq\",\"key\":\"URL\",\"values\":\"/example\"},{\"opValue\":\"eq\",\"key\":\"Header\",\"values\":\"3333\",\"subKey\":\"trt\"}],\"actionExternal\":{},\"action\":\"monitor\",\"ccStatus\":1,\"ratelimit\":{\"target\":\"remote_addr\",\"interval\":\"5\",\"threshold\":\"2\",\"effect\":\"rule\",\"status\":{\"code\":\"404\",\"count\":\"2\"},\"ttl\":\"1800\"}}\"
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @example 200001
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

    /**
     * @example off
     *
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'ruleConfig' => 'RuleConfig',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'ruleStatus' => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return ModifyDcdnWafRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
