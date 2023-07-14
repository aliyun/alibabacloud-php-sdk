<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallManagedPrometheusRequest extends Model
{
    /**
     * @description The response object.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The request ID.
     *
     * @example prd-ecs
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The response content. In most cases, the installation status of the Prometheus agent is returned.
     *
     * @example ask
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description success=false
     *
     * @example grafana-bp1*****
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @description __null__
     *
     * @example -
     *
     * @var string
     */
    public $kubeConfig;

    /**
     * @description The parameter is not supported.
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
     * @description The status code. The status code 200 indicates that the request was successful. If another status code is returned, the request failed.
     *
     * @example sg-bp1********
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The error message returned if the Prometheus agent failed to be installed.
     *
     * @example vsw-bp1*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Indicates whether the Prometheus agent was installed.
     *
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
