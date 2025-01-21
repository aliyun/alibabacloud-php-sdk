<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $accessType;
    /**
     * @var int
     */
    public $archiveDuration;
    /**
     * @var string
     */
    public $authFreeReadPolicy;
    /**
     * @var string
     */
    public $authFreeWritePolicy;
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
    public $dbInstanceStatus;
    /**
     * @var bool
     */
    public $enableAuthFreeRead;
    /**
     * @var bool
     */
    public $enableAuthFreeWrite;
    /**
     * @var string
     */
    public $enableAuthToken;
    /**
     * @var string[]
     */
    public $extraInfo;
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
    public $paymentTypeUpdateTime;
    /**
     * @var string
     */
    public $product;
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
     * @var int
     */
    public $storageDuration;
    /**
     * @var string
     */
    public $subClustersJson;
    /**
     * @var string[]
     */
    public $supportAuthTypes;
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
    public $version;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessType'            => 'AccessType',
        'archiveDuration'       => 'ArchiveDuration',
        'authFreeReadPolicy'    => 'AuthFreeReadPolicy',
        'authFreeWritePolicy'   => 'AuthFreeWritePolicy',
        'authToken'             => 'AuthToken',
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'clusterType'           => 'ClusterType',
        'dbInstanceStatus'      => 'DbInstanceStatus',
        'enableAuthFreeRead'    => 'EnableAuthFreeRead',
        'enableAuthFreeWrite'   => 'EnableAuthFreeWrite',
        'enableAuthToken'       => 'EnableAuthToken',
        'extraInfo'             => 'ExtraInfo',
        'grafanaInstanceId'     => 'GrafanaInstanceId',
        'httpApiInterUrl'       => 'HttpApiInterUrl',
        'httpApiIntraUrl'       => 'HttpApiIntraUrl',
        'paymentType'           => 'PaymentType',
        'paymentTypeUpdateTime' => 'PaymentTypeUpdateTime',
        'product'               => 'Product',
        'pushGatewayInterUrl'   => 'PushGatewayInterUrl',
        'pushGatewayIntraUrl'   => 'PushGatewayIntraUrl',
        'regionId'              => 'RegionId',
        'remoteReadInterUrl'    => 'RemoteReadInterUrl',
        'remoteReadIntraUrl'    => 'RemoteReadIntraUrl',
        'remoteWriteInterUrl'   => 'RemoteWriteInterUrl',
        'remoteWriteIntraUrl'   => 'RemoteWriteIntraUrl',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceType'          => 'ResourceType',
        'securityGroupId'       => 'SecurityGroupId',
        'storageDuration'       => 'StorageDuration',
        'subClustersJson'       => 'SubClustersJson',
        'supportAuthTypes'      => 'SupportAuthTypes',
        'tags'                  => 'Tags',
        'userId'                => 'UserId',
        'vSwitchId'             => 'VSwitchId',
        'version'               => 'Version',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->supportAuthTypes)) {
            Model::validateArray($this->supportAuthTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
        }

        if (null !== $this->authFreeReadPolicy) {
            $res['AuthFreeReadPolicy'] = $this->authFreeReadPolicy;
        }

        if (null !== $this->authFreeWritePolicy) {
            $res['AuthFreeWritePolicy'] = $this->authFreeWritePolicy;
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

        if (null !== $this->enableAuthFreeRead) {
            $res['EnableAuthFreeRead'] = $this->enableAuthFreeRead;
        }

        if (null !== $this->enableAuthFreeWrite) {
            $res['EnableAuthFreeWrite'] = $this->enableAuthFreeWrite;
        }

        if (null !== $this->enableAuthToken) {
            $res['EnableAuthToken'] = $this->enableAuthToken;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
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

        if (null !== $this->paymentTypeUpdateTime) {
            $res['PaymentTypeUpdateTime'] = $this->paymentTypeUpdateTime;
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
            if (\is_array($this->supportAuthTypes)) {
                $res['SupportAuthTypes'] = [];
                $n1                      = 0;
                foreach ($this->supportAuthTypes as $item1) {
                    $res['SupportAuthTypes'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
        }

        if (isset($map['AuthFreeReadPolicy'])) {
            $model->authFreeReadPolicy = $map['AuthFreeReadPolicy'];
        }

        if (isset($map['AuthFreeWritePolicy'])) {
            $model->authFreeWritePolicy = $map['AuthFreeWritePolicy'];
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

        if (isset($map['EnableAuthFreeRead'])) {
            $model->enableAuthFreeRead = $map['EnableAuthFreeRead'];
        }

        if (isset($map['EnableAuthFreeWrite'])) {
            $model->enableAuthFreeWrite = $map['EnableAuthFreeWrite'];
        }

        if (isset($map['EnableAuthToken'])) {
            $model->enableAuthToken = $map['EnableAuthToken'];
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
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

        if (isset($map['PaymentTypeUpdateTime'])) {
            $model->paymentTypeUpdateTime = $map['PaymentTypeUpdateTime'];
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
                $model->supportAuthTypes = [];
                $n1                      = 0;
                foreach ($map['SupportAuthTypes'] as $item1) {
                    $model->supportAuthTypes[$n1++] = $item1;
                }
            }
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

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
