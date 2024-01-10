<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreatePrometheusInstanceRequest extends Model
{
    /**
     * @description To edit a GlobalView aggregated instance, do you require all passed child instances to be verified successfully before creating a GlobalView instance (optional, default to false):
     * - false
     * @example true
     *
     * @var bool
     */
    public $allSubClustersSuccess;

    /**
     * @description The ID of the cluster. This parameter is required if you set ClusterType to aliyun-cs.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster. This parameter is required if you set ClusterType to remote-write, ecs, or global-view.
     *
     * @example clusterNameOfTest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Types include:
     * - flink: Prometheus for FLink
     * @example remote-write
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The ID of the Grafana dedicated instance. This parameter is available if you set ClusterType to ecs.
     *
     * @example grafana-bp1*****
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @description The region ID. If you create a Prometheus instance for a cloud service in China, set this parameter to cn-shanghai.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the custom resource group. You can specify this parameter to bind the instance to the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group. This parameter is required if you set ClusterType to ecs or create an ASK managed cluster.
     *
     * @example sg-bp1********
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The child instances of the Prometheus instance for GlobalView. The value is a JSON string.
     *
     * @example [ { "headers":{ }, "regionId":"cn-hangzhou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c39a1048921e04f***********", "sourceName":"arms-luyao-test", "dataSource":"", "userId":"1672753***********" }, { "headers":{ }, "regionId":"cn-beijing", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c6b6485496d5b40***********", "sourceName":"agent-321-test", "dataSource":"", "userId":"1672753***********" }, { "headers":{ }, "regionId":"cn-zhangjiakou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c261a4f3200c446***********", "sourceName":"zaifeng-cardinality-01", "dataSource":"", "userId":"1672753***********" } ]
     *
     * @var string
     */
    public $subClustersJson;

    /**
     * @description The tags of the instance. You can specify this parameter to manage tags for the instance.
     *
     * @example [
     * ]
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the vSwitch. This parameter is required if you set ClusterType to ecs or create an ASK managed cluster.
     *
     * @example vsw-bp1*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC). This parameter is required if you set ClusterType to ecs or create a serverless Kubernetes (ASK) managed cluster.
     *
     * @example vpc-rpn**********
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allSubClustersSuccess' => 'AllSubClustersSuccess',
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'clusterType'           => 'ClusterType',
        'grafanaInstanceId'     => 'GrafanaInstanceId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'securityGroupId'       => 'SecurityGroupId',
        'subClustersJson'       => 'SubClustersJson',
        'tags'                  => 'Tags',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allSubClustersSuccess) {
            $res['AllSubClustersSuccess'] = $this->allSubClustersSuccess;
        }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->subClustersJson) {
            $res['SubClustersJson'] = $this->subClustersJson;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreatePrometheusInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllSubClustersSuccess'])) {
            $model->allSubClustersSuccess = $map['AllSubClustersSuccess'];
        }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SubClustersJson'])) {
            $model->subClustersJson = $map['SubClustersJson'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
