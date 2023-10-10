<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the cluster. Valid values:
     *
     *   0: regular Docker cluster
     *   1: Swarm cluster (deprecated)
     *   2: Elastic Compute Service (ECS) cluster
     *   3: self-managed Kubernetes cluster in EDAS
     *   4: cluster in which Pandora automatically registers applications
     *   5: Container Service for Kubernetes (ACK) clusters
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The overcommit ratio supported by a Docker cluster. Valid values:
     *
     *   1: 1:1, which means that resources are not overcommitted.
     *   2: 1:2, which means that resources are overcommitted by 1:2.
     *   4: 1:4, which means that resources are overcommitted by 1:4.
     *   8: 1:8, which means that resources are overcommitted by 1:8.
     *
     * @example 1
     *
     * @var int
     */
    public $oversoldFactor;

    /**
     * @description The array data of the scaling rule.
     *
     * @var ruleList
     */
    public $ruleList;

    /**
     * @description The time when the scaling rule was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1574251601785
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-wz9b246z******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterType'    => 'ClusterType',
        'oversoldFactor' => 'OversoldFactor',
        'ruleList'       => 'RuleList',
        'updateTime'     => 'UpdateTime',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
