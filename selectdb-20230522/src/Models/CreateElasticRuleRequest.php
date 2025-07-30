<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class CreateElasticRuleRequest extends Model
{
    /**
     * @description The rule for computing resources of the required cluster.
     *
     * This parameter is required.
     *
     * @example selectdb.2xlarge
     *
     * @var string
     */
    public $clusterClass;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example selectdb-xxxb9f2w-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The time when you want to execute the scheduled scaling rule.
     *
     * This parameter is required.
     *
     * @example 00:00
     *
     * @var string
     */
    public $elasticRuleStartTime;

    /**
     * @description The execution cycle.
     *
     * Valid value:
     *
     *   Day
     *
     * This parameter is required.
     *
     * @example Day
     *
     * @var string
     */
    public $executionPeriod;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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
    protected $_name = [
        'clusterClass' => 'ClusterClass',
        'clusterId' => 'ClusterId',
        'dbInstanceId' => 'DbInstanceId',
        'elasticRuleStartTime' => 'ElasticRuleStartTime',
        'executionPeriod' => 'ExecutionPeriod',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateElasticRuleRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
