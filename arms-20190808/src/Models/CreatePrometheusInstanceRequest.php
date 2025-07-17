<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreatePrometheusInstanceRequest extends Model
{
    /**
     * @description Does it require all child instances to be verified successfully before creating a GlobalView instance. The default is false, which means partial success is possible.
     *
     * @example true
     *
     * @var bool
     */
    public $allSubClustersSuccess;

    /**
     * @description The number of days for which data is automatically archived after the storage expires. Valid values: 60, 90, 180, and 365. 0 indicates that the data is not archived.
     *
     * @example 90
     *
     * @var int
     */
    public $archiveDuration;

    /**
     * @description The ID of the ACK cluster. This parameter is required if you set the ClusterType parameter to aliyun-cs.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the created cluster. This parameter is required if you set the ClusterType parameter to remote-write or ecs.
     *
     * @example clusterNameOfTest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the Prometheus instance. Valid values:
     *
     *   remote-write: Prometheus instance for Remote Write
     *   ecs (unavailable): Prometheus instance for ECS
     *   global-view: Prometheus instance for GlobalView
     *   aliyun-cs: Prometheus instance for Container Service
     *   cloud-product (unavailable): Prometheus instance for Alibaba Cloud services
     *   cloud-monitor (unavailable): Prometheus instance for Hybrid Cloud Monitoring
     *   flink (unavailable): Prometheus instance for Flink
     *
     * This parameter is required.
     *
     * @example remote-write
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The data storage duration. Unit: days.
     *
     * @example 90
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the Grafana dedicated instance. This parameter is available if you set the ClusterType parameter to ecs.
     *
     * @example grafana-bp1*****
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @description The billing mode. Valid values: POSTPAY: charges fees based on the amount of reported metric data. POSTPAY_GB: charges fees based on the amount of written metric data. Empty: The user-defined default billing mode is used. If you do not specify a default value, you are charged based on the amount of reported metric data.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the region. If you use a Prometheus instance to monitor an Alibaba Cloud service in China, this parameter must be set to cn-shanghai.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the custom resource group. You can configure this parameter to bind the instance to the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group. This parameter is required if you set the ClusterType parameter to ecs.
     *
     * @example sg-bp1********
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description JSON string for child instances of the globalView instance.
     *
     * @example When the clusterType is global view, this parameter needs to be passed: a list of information about the clusters that need to be aggregated.
     * Example:
     * [
     * {
     * "Headers":{
     *
     * },
     * "RegionId": "cn hangzhou",
     * "SourceType": "Alibaba Prometheus",
     * "Extras":{
     *
     * },
     * "ClusterId": "c39a1048921e04f ****************",
     * "SourceName": "test1",
     * "DataSource": "",
     * "UserId": "1672753 ******************"
     * },
     * {
     * "Headers":{
     *
     * },
     * "RegionId": "cn beijing",
     * "SourceType": "Alibaba Prometheus",
     * "Extras":{
     *
     * },
     * "ClusterId": "c6b6485496d5b40 ****************",
     * "SourceName": "test2",
     * "DataSource": "",
     * "UserId": "1672753 ******************"
     * },
     * {
     * "Headers":{
     *
     * },
     * "RegionId": "cn zhangjiakou",
     * "SourceType": "Alibaba Prometheus",
     * "Extras":{
     *
     * },
     * "ClusterId": "c261a4f3200c446 ****************",
     * "SourceName": "test3",
     * "DataSource": "",
     * "UserId": "1672753 ******************"
     * }
     * ]
     *
     * @var string
     */
    public $subClustersJson;

    /**
     * @description The tags of the instance. You can configure this parameter to manage tags for the instance.
     *
     * @example [
     * {
     * "labelName":"labelValue"
     * },
     * {
     * "testName":"clusterA"
     * }
     * ]
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the vSwitch. This parameter is required if you set the ClusterType parameter to ecs.
     *
     * @example vsw-bp1*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of virtual private cloud (VPC). This parameter is required if you set the ClusterType parameter to ecs.
     *
     * @example vpc-rpn**********
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allSubClustersSuccess' => 'AllSubClustersSuccess',
        'archiveDuration' => 'ArchiveDuration',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'duration' => 'Duration',
        'grafanaInstanceId' => 'GrafanaInstanceId',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'subClustersJson' => 'SubClustersJson',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allSubClustersSuccess) {
            $res['AllSubClustersSuccess'] = $this->allSubClustersSuccess;
        }
        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->grafanaInstanceId) {
            $res['GrafanaInstanceId'] = $this->grafanaInstanceId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
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
        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GrafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['GrafanaInstanceId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
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
                $n = 0;
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
