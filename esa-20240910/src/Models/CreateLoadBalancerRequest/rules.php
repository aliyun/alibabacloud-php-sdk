<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest\rules\fixedResponse;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description Execute a specified response after matching the rule.
     *
     * @example {"content_type": "application/json", "location": "www.example.com", "message_body": "Testing Hello", "status_code": 0}
     *
     * @var fixedResponse
     */
    public $fixedResponse;

    /**
     * @description Modify the corresponding load balancing configuration after matching the rule. The fields in the configuration will override the corresponding fields in the load balancer configuration.
     *
     * @example {
     * "adaptive_routing": {
     * "failover_across_pools": true
     * },
     * "sub_region_pools": {
     * "AL,AT": [
     * 92298024898****,
     * 92304347804****
     * ],
     * "BG,BY": [
     * 92298024898****
     * ]
     * },
     * "default_pools": [
     * 92298024898****,
     * 92304347804****
     * ],
     * "fallback_pool": 92298024898****,
     * "location_strategy": {
     * "mode": "resolver_ip",
     * "prefer_ecs": "always"
     * },
     * "random_steering": {
     * "default_weight": 0.3,
     * "pool_weights": {
     * "92298024898****": 0.7,
     * "92304347804****": 0.8
     * }
     * },
     * "region_pools": {
     * "CN,SEAS": [
     * 92298024898****,
     * 92304347804****
     * ],
     * "SAF,SAS": [
     * 92304347804****
     * ]
     * },
     * "session_affinity": "ip",
     * "steering_policy": "geo",
     * "ttl": 30
     * }
     *
     * @var mixed
     */
    public $overrides;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter does not need to be set when adding global configurations. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.request.method eq "GET" and http.request.version eq "HTTP/1.0") or (ip.geoip.country eq "CN") or (http.host eq "www.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter does not need to be set when adding global configurations. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter does not need to be set when adding global configurations.
     *
     * @example rule_1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The execution order of the rule. It can be left blank, in which case the rules will be executed in the order they appear in the list. If specified, it should be an integer greater than 0, with higher values indicating a higher priority for execution.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Whether to terminate the execution of subsequent rules.
     *
     * - true: Yes.
     * - false: No, default value.
     *
     * @example true
     *
     * @var bool
     */
    public $terminates;
    protected $_name = [
        'fixedResponse' => 'FixedResponse',
        'overrides' => 'Overrides',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'terminates' => 'Terminates',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixedResponse) {
            $res['FixedResponse'] = null !== $this->fixedResponse ? $this->fixedResponse->toMap() : null;
        }
        if (null !== $this->overrides) {
            $res['Overrides'] = $this->overrides;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->terminates) {
            $res['Terminates'] = $this->terminates;
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
        if (isset($map['FixedResponse'])) {
            $model->fixedResponse = fixedResponse::fromMap($map['FixedResponse']);
        }
        if (isset($map['Overrides'])) {
            $model->overrides = $map['Overrides'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Terminates'])) {
            $model->terminates = $map['Terminates'];
        }

        return $model;
    }
}
