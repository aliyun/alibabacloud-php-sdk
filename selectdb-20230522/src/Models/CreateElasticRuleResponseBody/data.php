<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateElasticRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $clusterClass;

    /**
     * @example selectdb-xxxb9f2w-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $dbInstanceId;

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
     * @example 5465
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'clusterClass'         => 'ClusterClass',
        'clusterId'            => 'ClusterId',
        'dbInstanceId'         => 'DbInstanceId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterClass'])) {
            $model->clusterClass = $map['ClusterClass'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
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
