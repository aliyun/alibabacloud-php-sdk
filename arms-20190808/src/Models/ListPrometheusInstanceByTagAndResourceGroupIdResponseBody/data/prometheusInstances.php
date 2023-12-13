<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data\prometheusInstances\tags;
use AlibabaCloud\Tea\Model;

class prometheusInstances extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example c9d5dda1aeca64220853ace304baeb03d
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the Prometheus instance.
     *
     * @example prom1
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values: remote-write: Prometheus instance for remote write.
     *
     *   ecs: Prometheus instances for ECS.
     *   cloud-monitor: Prometheus instance for Alibaba Cloud services in the Chinese mainland.
     *   cloud-product: Prometheus instance for Alibaba Cloud services outside China.
     *   global-view: Prometheus instance for GlobalView.
     *   aliyun-cs: Prometheus instance for Container Service.
     *
     * @example ecs
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The ID of the Grafana workspace.
     *
     * @example grafana-rnggfvhlcdl6m71l**
     *
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @var string
     */
    public $httpApiInterUrl;

    /**
     * @var string
     */
    public $httpApiIntraUrl;

    /**
     * @description The billing method. Valid values:
     *
     *   PREPAY: subscription.
     *   POSTPAY: pay-as-you-go.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $pushGatewayInterUrl;

    /**
     * @var string
     */
    public $pushGatewayIntraUrl;

    /**
     * @description The region ID of the Prometheus instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteReadInterUrl;

    /**
     * @var string
     */
    public $remoteReadIntraUrl;

    /**
     * @var string
     */
    public $remoteWriteInterUrl;

    /**
     * @var string
     */
    public $remoteWriteIntraUrl;

    /**
     * @description The ID of the resource group to which the Prometheus instance belongs.
     *
     * @example rg-acfmz7nocpeidcy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 资源类型
     *
     * @example PROMETHEUS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the security group.
     *
     * @example sg-f8zd1toc10wmbi1v5rom
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The child instances of the Prometheus instance for GlobalView instance. The value is a JSON string.
     *
     * @example \[ { "headers": {}, "regionId": "cn-hangzhou", "sourceType": "AlibabaPrometheus", "extras": {}, "clusterId": "c39a1048921e04fceb039db2fb\*\*\*\*", "sourceName": "arms-luyao-test", "dataSource": "", "userId": "167275301789\*\*\*\*" }, { "headers": {}, "regionId": "cn-beijing", "sourceType": "AlibabaPrometheus", "extras": {}, "clusterId": "c6b6485496d5b400abde22cb47b5\*\*\*\*", "sourceName": "agent-321-test", "dataSource": "", "userId": "167275301789\*\*\*\*" }, { "headers": {}, "regionId": "cn-zhangjiakou", "sourceType": "AlibabaPrometheus", "extras": {}, "clusterId": "c261a4f3200c446659133f1ade78\*\*\*\*", "sourceName": "zaifeng-cardinality-01", "dataSource": "", "userId": "167275301789\*\*\*\*" } ]
     *
     * @var string
     */
    public $subClustersJson;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the user.
     *
     * @example 1672753017899***
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-f8z73vcja1tqnw90aav5a
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-8vbtp1fsm8mir18l8rl0u
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authToken'           => 'AuthToken',
        'clusterId'           => 'ClusterId',
        'clusterName'         => 'ClusterName',
        'clusterType'         => 'ClusterType',
        'grafanaInstanceId'   => 'GrafanaInstanceId',
        'httpApiInterUrl'     => 'HttpApiInterUrl',
        'httpApiIntraUrl'     => 'HttpApiIntraUrl',
        'paymentType'         => 'PaymentType',
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
        'subClustersJson'     => 'SubClustersJson',
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
     * @return prometheusInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
