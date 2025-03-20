<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers\rules\fixedResponse;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description Executes a specified response after matching the rule.
     *
     * @var fixedResponse
     */
    public $fixedResponse;

    /**
     * @description Modifies the corresponding load balancer configuration after matching the rule. The fields in this configuration will override the corresponding fields in the load balancer configuration.
     *
     * @example {
     * "adaptive_routing": {
     * "failover_across_pools": true
     * },
     * "sub_region_pools": {
     * "GB": [
     * 96228666776****
     * ],
     * "US": [
     * 96228666776****
     * ]
     * },
     * "default_pools": [
     * 96228666776****,
     * 96228666776****
     * ],
     * "fallback_pool": 96228666776****,
     * "location_strategy": {
     * "mode": "resolver_ip",
     * "prefer_ecs": "always"
     * },
     * "random_steering": {
     * "default_weight": 30,
     * "pool_weights": {
     * "96228666776****": 70,
     * "96228666776****": 80
     * }
     * },
     * "region_pools": {
     * "ENAM": [
     * 96228666776****,
     * 92843536908****
     * ],
     * "WNAM": [
     * 92843536908****
     * ]
     * },
     * "session_affinity": "cookie",
     * "session_affinity_attributes": {
     * "drain_duration": 100,
     * "headers": ["none"],
     * "require_all_headers": false,
     * "samesite": "Auto",
     * "secure": "Auto",
     * "zero_downtime_failover": "sticky"
     * },
     * "session_affinity_ttl": 1800,
     * "steering_policy": "dynamic_latency",
     * "ttl": 30
     * }
     *
     * @var mixed
     */
    public $overrides;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding global configurations. There are two usage scenarios:
     * - Match all incoming requests: set the value to true
     * - Match specific requests: set the value to a custom expression, for example: (http.host eq "video.example.com")
     *
     * @example http.request.uri.path contains "/testing"
     *
     * @var string
     */
    public $rule;

    /**
     * @description The switch for the rule. This parameter is not required when adding a global configuration. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The name of the rule. This parameter is not required when adding a global configuration.
     *
     * @example r2
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The execution order of the rule. The higher the value, the higher the priority.
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
     * - false: No, which is the default value.
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
