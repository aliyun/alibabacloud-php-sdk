<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticRuleRequest extends Model
{
    /**
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $clusterClass;

    /**
     * @description This parameter is required.
     *
     * @example selectdb-cn-nwy3jv1oa02-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
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
     * @example selectdb
     *
     * @var string
     */
    public $product;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example 5467
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
        'product'              => 'Product',
        'regionId'             => 'RegionId',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticRuleRequest
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
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
