<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponseBody;

use AlibabaCloud\Dara\Model;

class clusterRule extends Model
{
    /**
     * @var string
     */
    public $clusterRuleResourceId;

    /**
     * @var string
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
