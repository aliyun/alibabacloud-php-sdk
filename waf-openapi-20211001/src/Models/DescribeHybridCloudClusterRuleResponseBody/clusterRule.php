<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponseBody;

use AlibabaCloud\Tea\Model;

class clusterRule extends Model
{
    /**
     * @var string
     */
    public $clusterRuleResourceId;

    /**
     * @description The configuration of the rule.
     *
     * @example {\\"check_mode\\":\\"all\\",\\"exclude\\":{\\"exact\\":[],\\"regex\\":[]}}
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleStatus;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **pullin**: The traffic redirection rule of the hybrid cloud cluster.
     *
     * @example pullin
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterRuleResourceId) {
            $res['ClusterRuleResourceId'] = $this->clusterRuleResourceId;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterRuleResourceId'])) {
            $model->clusterRuleResourceId = $map['ClusterRuleResourceId'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
