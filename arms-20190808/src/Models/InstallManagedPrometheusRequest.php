<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallManagedPrometheusRequest extends Model
{
    /**
     * @description The ID of the ASK cluster.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster. This parameter is required if the ClusterType parameter is set to ecs.
     *
     * @example prd-ecs
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values: ask and ecs.
     *
     * This parameter is required.
     * @example ask
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The ID of the Grafana workspace in which the cluster resides. If you set this parameter to free or leave this parameter empty, the cluster is deployed in a shared Grafana workspace.
     *
     * @example grafana-bp1*****
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @description The parameter is not supported.
     *
     * @example -
     *
     * @var string
     */
    public $kubeConfig;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Prometheus实例的资源组ID。
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group to which the cluster belongs.
     *
     * This parameter is required.
     * @example sg-bp1********
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the vSwitch that is used by the cluster.
     *
     * This parameter is required.
     * @example vsw-bp1*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) where the cluster resides.
     *
     * This parameter is required.
     * @example vpc-xxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'clusterType'       => 'ClusterType',
        'grafanaInstanceId' => 'GrafanaInstanceId',
        'kubeConfig'        => 'KubeConfig',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'securityGroupId'   => 'SecurityGroupId',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
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
        if (null !== $this->grafanaInstanceId) {
            $res['GrafanaInstanceId'] = $this->grafanaInstanceId;
        }
        if (null !== $this->kubeConfig) {
            $res['KubeConfig'] = $this->kubeConfig;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallManagedPrometheusRequest
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
        if (isset($map['GrafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['GrafanaInstanceId'];
        }
        if (isset($map['KubeConfig'])) {
            $model->kubeConfig = $map['KubeConfig'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
