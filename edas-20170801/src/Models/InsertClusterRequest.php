<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertClusterRequest extends Model
{
    /**
     * @description The name of the cluster.
     *
     * @example ****_product_test2
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   2: Elastic Compute Service (ECS) cluster
     *   3: self-managed Kubernetes cluster in Enterprise Distributed Application Service (EDAS)
     *   5: Kubernetes cluster
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The provider of Infrastructure as a Service (IaaS) resources that are used in the cluster.
     *
     * When you use Alibaba Cloud, set the value to `ALIYUN`. The value is case-sensitive.
     * @example ALIYUN
     *
     * @var string
     */
    public $iaasProvider;

    /**
     * @description The ID of the custom namespace. The ID is in the `physical region ID:custom namespace identifier` format. Example: `cn-hangzhou:test`.
     *
     * @example cn-beijing:td****
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   1: classic network
     *   2: virtual private cloud (VPC)
     *
     * @example 2
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description **This parameter is deprecated.** The CPU overcommit ratio supported by a Docker cluster. Valid values:
     *
     *   2: 1:2, which means that resources are overcommitted by 1:2.
     *   4: 1:4, which means that resources are overcommitted by 1:4.
     *   8: 1:8, which means that resources are overcommitted by 1:8.
     *
     * @example 2
     *
     * @var int
     */
    public $oversoldFactor;

    /**
     * @description The ID of the VPC. This parameter is required if you set the NetworkMode parameter to 2.
     *
     * @example vpc-2zef6ob8mrlzv8x3q****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterName'     => 'ClusterName',
        'clusterType'     => 'ClusterType',
        'iaasProvider'    => 'IaasProvider',
        'logicalRegionId' => 'LogicalRegionId',
        'networkMode'     => 'NetworkMode',
        'oversoldFactor'  => 'OversoldFactor',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
