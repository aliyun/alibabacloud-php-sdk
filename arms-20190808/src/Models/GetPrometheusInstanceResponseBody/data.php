<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The permission type. Valid values: readWrite, readOnly, and httpReadOnly
     *
     * @example readWrite
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The number of days for which data is automatically archived after the storage duration expires. Valid values: 60, 90, 180, and 365. 0 indicates that the data is not archived.
     *
     * @example 60
     *
     * @var int
     */
    public $archiveDuration;

    /**
     * @description The authorization token.
     *
     * @example GciOiJIUzI1NiJ9***
     *
     * @var string
     */
    public $authToken;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example c589a1b8db05c4561aefbb898ca8fb1cf
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the monitoring object.
     *
     * @example prom1
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description *   remote-write: general-purpose Prometheus instance
     *   ecs: Prometheus instances for ECS
     *   cloud-monitor: Prometheus instance for Alibaba Cloud services in the Chinese mainland
     *   cloud-product: Prometheus instance for Alibaba Cloud services outside the Chinese mainland
     *   global-view: global aggregation instance
     *   aliyun-cs: Prometheus instance for Container Service
     *
     * @example remote-write
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The data storage status at the backend.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $dbInstanceStatus;

    /**
     * @description Indicates whether access token authentication is enabled.
     *
     * @example true
     *
     * @var string
     */
    public $enableAuthToken;

    /**
     * @description The ID of the Grafana workspace.
     *
     * @example grafana-rnggfvhlcdl6m71***
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @description The public URL for the HTTP API.
     *
     * @example https://cn-beijing.arms.aliyuncs.com:9443/api/v1/prometheus/xxx
     *
     * @var string
     */
    public $httpApiInterUrl;

    /**
     * @description The internal URL for the HTTP API.
     *
     * @example http://cn-beijing-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/xxx
     *
     * @var string
     */
    public $httpApiIntraUrl;

    /**
     * @description The billing method. Valid values:
     *
     *   PREPAY: subscription
     *   POSTPAY: pay-as-you-go
     *
     * @example PREPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The product to which the Prometheus instance belongs. Valid values: arms and cms.
     *
     * @example arms
     *
     * @var string
     */
    public $product;

    /**
     * @description The public URL for Pushgateway.
     *
     * @example https://cn-beijing.arms.aliyuncs.com/prometheus/xxx/api/v2
     *
     * @var string
     */
    public $pushGatewayInterUrl;

    /**
     * @description The internal URL for Pushgateway.
     *
     * @example http://cn-beijing-intranet.arms.aliyuncs.com/prometheus/xxx/api/v2
     *
     * @var string
     */
    public $pushGatewayIntraUrl;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The public URL for remote read.
     *
     * @example http://cn-beijing.arms.aliyuncs.com:9090/api/v1/prometheus/xxx/api/v1/read
     *
     * @var string
     */
    public $remoteReadInterUrl;

    /**
     * @description The internal URL for remote read.
     *
     * @example http://cn-beijing-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/xxx/api/v1/read
     *
     * @var string
     */
    public $remoteReadIntraUrl;

    /**
     * @description The public URL for remote write.
     *
     * @example https://cn-beijing.arms.aliyuncs.com/prometheus/xxx/api/v3/write
     *
     * @var string
     */
    public $remoteWriteInterUrl;

    /**
     * @description The internal URL for remote write.
     *
     * @example http://cn-beijing-intranet.arms.aliyuncs.com/prometheus/xxx/api/v3/write
     *
     * @var string
     */
    public $remoteWriteIntraUrl;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aek2vezare****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the resource. Set the value to PROMETHEUS.
     *
     * @example PROMETHEUS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the security group. This parameter is returned only for Prometheus instances for ECS.
     *
     * @example sg-8vbdgmf4nraiqa9bx0jo
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The data storage duration. Unit: days.
     *
     * @example 90
     *
     * @var int
     */
    public $storageDuration;

    /**
     * @description The child instances of the Prometheus instance for GlobalView. The value is a JSON string.
     *
     * @example [{"headers":{},"regionId":"cn-hangzhou","sourceType":"AlibabaPrometheus","extras":{},"clusterId":"c39a1048921e04fceb039db2fbb73\\*\\*\\*","sourceName":"arms-luyao-test","dataSource":"","userId":"167275301789\\*\\*\\*"},{"headers":{},"regionId":"cn-beijing","sourceType":"AlibabaPrometheus","extras":{},"clusterId":"c6b6485496d5b400abde22cb47b5\\*\\*\\*\\*","sourceName":"agent-321-test","dataSource":"","userId":"1672753017899\\*\\*\\*"},{"headers":{},"regionId":"cn-zhangjiakou","sourceType":"AlibabaPrometheus","extras":{},"clusterId":"c261a4f3200c446659133f1ade789b15e","sourceName":"zaifeng-cardinality-01","dataSource":"","userId":"167275301789\\*\\*\\*"}]
     *
     * @var string
     */
    public $subClustersJson;

    /**
     * @var string[]
     */
    public $supportAuthTypes;

    /**
     * @description The tags of the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The user ID.
     *
     * @example 167275301789****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The vSwitch ID. This parameter is returned only for Prometheus instances for ECS.
     *
     * @example vsw-f8z73vcja1tqnw90aav5a
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID. This parameter is returned only for Prometheus instances for ECS.
     *
     * @example vpc-8vb02uk57qbcktqcvqqqj
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessType'          => 'AccessType',
        'archiveDuration'     => 'ArchiveDuration',
        'authToken'           => 'AuthToken',
        'clusterId'           => 'ClusterId',
        'clusterName'         => 'ClusterName',
        'clusterType'         => 'ClusterType',
        'dbInstanceStatus'    => 'DbInstanceStatus',
        'enableAuthToken'     => 'EnableAuthToken',
        'grafanaInstanceId'   => 'GrafanaInstanceId',
        'httpApiInterUrl'     => 'HttpApiInterUrl',
        'httpApiIntraUrl'     => 'HttpApiIntraUrl',
        'paymentType'         => 'PaymentType',
        'product'             => 'Product',
        'pushGatewayInterUrl' => 'PushGatewayInterUrl',
        'pushGatewayIntraUrl' => 'PushGatewayIntraUrl',
        'regionId'            => 'RegionId',
        'remoteReadInterUrl'  => 'RemoteReadInterUrl',
        'remoteReadIntraUrl'  => 'RemoteReadIntraUrl',
        'remoteWriteInterUrl' => 'RemoteWriteInterUrl',
        'remoteWriteIntraUrl' => 'RemoteWriteIntraUrl',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceType'        => 'ResourceType',
        'securityGroupId'     => 'SecurityGroupId',
        'storageDuration'     => 'StorageDuration',
        'subClustersJson'     => 'SubClustersJson',
        'supportAuthTypes'    => 'SupportAuthTypes',
        'tags'                => 'Tags',
        'userId'              => 'UserId',
        'vSwitchId'           => 'VSwitchId',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
        }
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
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
        if (null !== $this->dbInstanceStatus) {
            $res['DbInstanceStatus'] = $this->dbInstanceStatus;
        }
        if (null !== $this->enableAuthToken) {
            $res['EnableAuthToken'] = $this->enableAuthToken;
        }
        if (null !== $this->grafanaInstanceId) {
            $res['GrafanaInstanceId'] = $this->grafanaInstanceId;
        }
        if (null !== $this->httpApiInterUrl) {
            $res['HttpApiInterUrl'] = $this->httpApiInterUrl;
        }
        if (null !== $this->httpApiIntraUrl) {
            $res['HttpApiIntraUrl'] = $this->httpApiIntraUrl;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->pushGatewayInterUrl) {
            $res['PushGatewayInterUrl'] = $this->pushGatewayInterUrl;
        }
        if (null !== $this->pushGatewayIntraUrl) {
            $res['PushGatewayIntraUrl'] = $this->pushGatewayIntraUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteReadInterUrl) {
            $res['RemoteReadInterUrl'] = $this->remoteReadInterUrl;
        }
        if (null !== $this->remoteReadIntraUrl) {
            $res['RemoteReadIntraUrl'] = $this->remoteReadIntraUrl;
        }
        if (null !== $this->remoteWriteInterUrl) {
            $res['RemoteWriteInterUrl'] = $this->remoteWriteInterUrl;
        }
        if (null !== $this->remoteWriteIntraUrl) {
            $res['RemoteWriteIntraUrl'] = $this->remoteWriteIntraUrl;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->storageDuration) {
            $res['StorageDuration'] = $this->storageDuration;
        }
        if (null !== $this->subClustersJson) {
            $res['SubClustersJson'] = $this->subClustersJson;
        }
        if (null !== $this->supportAuthTypes) {
            $res['SupportAuthTypes'] = $this->supportAuthTypes;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
        }
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
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
        if (isset($map['DbInstanceStatus'])) {
            $model->dbInstanceStatus = $map['DbInstanceStatus'];
        }
        if (isset($map['EnableAuthToken'])) {
            $model->enableAuthToken = $map['EnableAuthToken'];
        }
        if (isset($map['GrafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['GrafanaInstanceId'];
        }
        if (isset($map['HttpApiInterUrl'])) {
            $model->httpApiInterUrl = $map['HttpApiInterUrl'];
        }
        if (isset($map['HttpApiIntraUrl'])) {
            $model->httpApiIntraUrl = $map['HttpApiIntraUrl'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['PushGatewayInterUrl'])) {
            $model->pushGatewayInterUrl = $map['PushGatewayInterUrl'];
        }
        if (isset($map['PushGatewayIntraUrl'])) {
            $model->pushGatewayIntraUrl = $map['PushGatewayIntraUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteReadInterUrl'])) {
            $model->remoteReadInterUrl = $map['RemoteReadInterUrl'];
        }
        if (isset($map['RemoteReadIntraUrl'])) {
            $model->remoteReadIntraUrl = $map['RemoteReadIntraUrl'];
        }
        if (isset($map['RemoteWriteInterUrl'])) {
            $model->remoteWriteInterUrl = $map['RemoteWriteInterUrl'];
        }
        if (isset($map['RemoteWriteIntraUrl'])) {
            $model->remoteWriteIntraUrl = $map['RemoteWriteIntraUrl'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['StorageDuration'])) {
            $model->storageDuration = $map['StorageDuration'];
        }
        if (isset($map['SubClustersJson'])) {
            $model->subClustersJson = $map['SubClustersJson'];
        }
        if (isset($map['SupportAuthTypes'])) {
            if (!empty($map['SupportAuthTypes'])) {
                $model->supportAuthTypes = $map['SupportAuthTypes'];
            }
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
