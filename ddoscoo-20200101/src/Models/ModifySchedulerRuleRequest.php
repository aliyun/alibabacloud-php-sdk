<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySchedulerRuleRequest extends Model
{
    /**
     * @description The details of the CDN interaction rule. This parameter is a JSON string. The string contains the following fields:
     *
     *   **ParamType**: the type of the scheduling rule. This field is required and must be of the string type. Set the value to **cdn**. This indicates that you want to modify a CDN interaction rule.
     *
     *   **ParamData**: the values of parameters that you want to modify for the CDN interaction rule. This field is required and must be of the map type. The ParamData parameter contains the following parameters:
     *
     *   **Domain**: the accelerated domain in CDN. This parameter is required and must be of the string type.
     *   **Cname**: the CNAME that is assigned to the accelerated domain. This parameter is required and must be of the string type.
     *   **AccessQps**: the queries per second (QPS) threshold that is used to switch service traffic to Anti-DDoS Pro or Anti-DDoS Premium. This parameter is required and must be of the integer type.
     *   **UpstreamQps**: the QPS threshold that is used to switch service traffic to CDN. This parameter is optional and must be of the integer type.
     *
     * @example {"ParamType":"cdn","ParamData":"Domain":"example.aliyundoc.com","Cname":"demo.aliyundoc.com","AccessQps":100,"UpstreamQps":100}}
     *
     * @var string
     */
    public $param;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the rule that you want to modify.
     *
     * This parameter is required.
     * @example testrule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the scheduling rule. Valid values:
     *
     *   **2**: tiered protection
     *   **3**: network acceleration
     *   **5**: CDN interaction
     *   **6**: cloud service interaction
     *   **8**: secure acceleration
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The details of the scheduling rule. This parameter is a JSON string. The following list describes the fields in the value of the parameter:
     *
     *   **Type**: the address type of the interaction resource that you want to use in the scheduling rule. This field is required and must be of the string type. Valid values:
     *
     *   **A**: IP address
     *   **CNAME**: domain name
     *
     *   **Value**: the address of the interaction resource that you want to use in the scheduling rule. This field is required and must be of the string type.
     *
     *   **Priority**: the priority of the scheduling rule. This field is required and must be of the integer type. Valid values: **0** to **100**. A larger value indicates a higher priority.
     *
     *   **ValueType**: the type of the interaction resource that you want to use in the scheduling rule. This field is required and must be of the integer type. Valid values:
     *
     *   **1**: the IP address of the Anti-DDoS Pro or Anti-DDoS Premium instance
     *   **2**: the IP address of the interaction resource in the tiered protection scenario
     *   **3**: the IP address that is used to accelerate access in the network acceleration scenario
     *   **5**: the domain name that is configured in Alibaba Cloud CDN (CDN) in the CDN interaction scenario
     *   **6** the IP address of the interaction resource in the cloud service interaction scenario
     *   **8**: the IP address of the Secure Chinese Mainland Acceleration (Sec-CMA) instance in the secure acceleration scenario
     *
     *   **RegionId**: the region where the interaction resource is deployed. This parameter must be specified when **ValueType** is set to **2**. The value must be of the string type.
     *
     * This parameter is required.
     * @example [{"Type":"A", "Value":"1.1.XX.XX", "Priority":80,"ValueType":2, "RegionId":"cn-hangzhou" },{"Type":"A", "Value":"203.199.XX.XX", "Priority":80,"ValueType":1}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'param'           => 'Param',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleName'        => 'RuleName',
        'ruleType'        => 'RuleType',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySchedulerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
