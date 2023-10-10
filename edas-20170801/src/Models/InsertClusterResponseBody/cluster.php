<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterResponseBody;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example 8705ad13-5d86-47fc-b68f-257b59ed****
     *
     * @var string
     */
    public $clusterId;

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
     *   2: ECS cluster
     *   3: self-managed Kubernetes cluster in EDAS
     *   5: Kubernetes cluster
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The provider of the IaaS resources that are used in the cluster.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $iaasProvider;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   1: classic network
     *   2\. VPC
     *
     * @example 2
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description **This parameter is deprecated.** The CPU overcommit ratio supported by the Docker cluster. Valid values:
     *
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
     * @description The ID of the region in which the cluster resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2zef6ob8mrlzv8x3q****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'clusterType'    => 'ClusterType',
        'iaasProvider'   => 'IaasProvider',
        'networkMode'    => 'NetworkMode',
        'oversoldFactor' => 'OversoldFactor',
        'regionId'       => 'RegionId',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
