<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRulesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $clusterId;

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
    public $ruleType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'ruleConfig' => 'RuleConfig',
        'ruleType' => 'RuleType',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterRuleResourceId) {
            $res['ClusterRuleResourceId'] = $this->clusterRuleResourceId;
        }

        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterRuleResourceId'])) {
            $model->clusterRuleResourceId = $map['ClusterRuleResourceId'];
        }

        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
