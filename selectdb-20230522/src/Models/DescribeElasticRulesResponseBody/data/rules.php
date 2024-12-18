<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeElasticRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $clusterClass;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $elasticRuleStartTime;

    /**
     * @example Day
     *
     * @var string
     */
    public $executionPeriod;

    /**
     * @example 5467
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'clusterClass'         => 'ClusterClass',
        'elasticRuleStartTime' => 'ElasticRuleStartTime',
        'executionPeriod'      => 'ExecutionPeriod',
        'ruleId'               => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterClass) {
            $res['ClusterClass'] = $this->clusterClass;
        }
        if (null !== $this->elasticRuleStartTime) {
            $res['ElasticRuleStartTime'] = $this->elasticRuleStartTime;
        }
        if (null !== $this->executionPeriod) {
            $res['ExecutionPeriod'] = $this->executionPeriod;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['ClusterClass'])) {
            $model->clusterClass = $map['ClusterClass'];
        }
        if (isset($map['ElasticRuleStartTime'])) {
            $model->elasticRuleStartTime = $map['ElasticRuleStartTime'];
        }
        if (isset($map['ExecutionPeriod'])) {
            $model->executionPeriod = $map['ExecutionPeriod'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
