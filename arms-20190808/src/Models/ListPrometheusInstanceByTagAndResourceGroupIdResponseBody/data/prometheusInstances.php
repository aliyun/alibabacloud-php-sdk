<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data\prometheusInstances\tags;

class prometheusInstances extends Model
{
    /**
     * @var string
     */
    public $authToken;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $clusterType;
    /**
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
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $subClustersJson;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
