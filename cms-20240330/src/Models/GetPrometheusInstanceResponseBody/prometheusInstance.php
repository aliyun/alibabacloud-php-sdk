<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponseBody\prometheusInstance\tags;

class prometheusInstance extends Model
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
    public $createTime;

    /**
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @var bool
     */
    public $enableAuthFreeWrite;

    /**
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @var string[]
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $folderUrl;

    /**
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @var string
     */
    public $grafanaInstanceName;

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
    public $instanceType;

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
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $prometheusInstanceName;

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
    public $status;

    /**
     * @var int
     */
    public $storageDuration;

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
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'accessType' => 'accessType',
        'archiveDuration' => 'archiveDuration',
        'authFreeReadPolicy' => 'authFreeReadPolicy',
        'authFreeWritePolicy' => 'authFreeWritePolicy',
        'authToken' => 'authToken',
        'createTime' => 'createTime',
        'enableAuthFreeRead' => 'enableAuthFreeRead',
        'enableAuthFreeWrite' => 'enableAuthFreeWrite',
        'enableAuthToken' => 'enableAuthToken',
        'extraInfo' => 'extraInfo',
        'folderUrl' => 'folderUrl',
        'grafanaInstanceId' => 'grafanaInstanceId',
        'grafanaInstanceName' => 'grafanaInstanceName',
        'httpApiInterUrl' => 'httpApiInterUrl',
        'httpApiIntraUrl' => 'httpApiIntraUrl',
        'instanceType' => 'instanceType',
        'paymentType' => 'paymentType',
        'paymentTypeUpdateTime' => 'paymentTypeUpdateTime',
        'product' => 'product',
        'prometheusInstanceId' => 'prometheusInstanceId',
        'prometheusInstanceName' => 'prometheusInstanceName',
        'pushGatewayInterUrl' => 'pushGatewayInterUrl',
        'pushGatewayIntraUrl' => 'pushGatewayIntraUrl',
        'regionId' => 'regionId',
        'remoteReadInterUrl' => 'remoteReadInterUrl',
        'remoteReadIntraUrl' => 'remoteReadIntraUrl',
        'remoteWriteInterUrl' => 'remoteWriteInterUrl',
        'remoteWriteIntraUrl' => 'remoteWriteIntraUrl',
        'resourceGroupId' => 'resourceGroupId',
        'resourceType' => 'resourceType',
        'status' => 'status',
        'storageDuration' => 'storageDuration',
        'supportAuthTypes' => 'supportAuthTypes',
        'tags' => 'tags',
        'userId' => 'userId',
        'version' => 'version',
        'workspace' => 'workspace',
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
            $res['accessType'] = $this->accessType;
        }

        if (null !== $this->archiveDuration) {
            $res['archiveDuration'] = $this->archiveDuration;
        }

        if (null !== $this->authFreeReadPolicy) {
            $res['authFreeReadPolicy'] = $this->authFreeReadPolicy;
        }

        if (null !== $this->authFreeWritePolicy) {
            $res['authFreeWritePolicy'] = $this->authFreeWritePolicy;
        }

        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->enableAuthFreeRead) {
            $res['enableAuthFreeRead'] = $this->enableAuthFreeRead;
        }

        if (null !== $this->enableAuthFreeWrite) {
            $res['enableAuthFreeWrite'] = $this->enableAuthFreeWrite;
        }

        if (null !== $this->enableAuthToken) {
            $res['enableAuthToken'] = $this->enableAuthToken;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['extraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['extraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->folderUrl) {
            $res['folderUrl'] = $this->folderUrl;
        }

        if (null !== $this->grafanaInstanceId) {
            $res['grafanaInstanceId'] = $this->grafanaInstanceId;
        }

        if (null !== $this->grafanaInstanceName) {
            $res['grafanaInstanceName'] = $this->grafanaInstanceName;
        }

        if (null !== $this->httpApiInterUrl) {
            $res['httpApiInterUrl'] = $this->httpApiInterUrl;
        }

        if (null !== $this->httpApiIntraUrl) {
            $res['httpApiIntraUrl'] = $this->httpApiIntraUrl;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->paymentTypeUpdateTime) {
            $res['paymentTypeUpdateTime'] = $this->paymentTypeUpdateTime;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->prometheusInstanceId) {
            $res['prometheusInstanceId'] = $this->prometheusInstanceId;
        }

        if (null !== $this->prometheusInstanceName) {
            $res['prometheusInstanceName'] = $this->prometheusInstanceName;
        }

        if (null !== $this->pushGatewayInterUrl) {
            $res['pushGatewayInterUrl'] = $this->pushGatewayInterUrl;
        }

        if (null !== $this->pushGatewayIntraUrl) {
            $res['pushGatewayIntraUrl'] = $this->pushGatewayIntraUrl;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->remoteReadInterUrl) {
            $res['remoteReadInterUrl'] = $this->remoteReadInterUrl;
        }

        if (null !== $this->remoteReadIntraUrl) {
            $res['remoteReadIntraUrl'] = $this->remoteReadIntraUrl;
        }

        if (null !== $this->remoteWriteInterUrl) {
            $res['remoteWriteInterUrl'] = $this->remoteWriteInterUrl;
        }

        if (null !== $this->remoteWriteIntraUrl) {
            $res['remoteWriteIntraUrl'] = $this->remoteWriteIntraUrl;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->storageDuration) {
            $res['storageDuration'] = $this->storageDuration;
        }

        if (null !== $this->supportAuthTypes) {
            if (\is_array($this->supportAuthTypes)) {
                $res['supportAuthTypes'] = [];
                $n1 = 0;
                foreach ($this->supportAuthTypes as $item1) {
                    $res['supportAuthTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['accessType'])) {
            $model->accessType = $map['accessType'];
        }

        if (isset($map['archiveDuration'])) {
            $model->archiveDuration = $map['archiveDuration'];
        }

        if (isset($map['authFreeReadPolicy'])) {
            $model->authFreeReadPolicy = $map['authFreeReadPolicy'];
        }

        if (isset($map['authFreeWritePolicy'])) {
            $model->authFreeWritePolicy = $map['authFreeWritePolicy'];
        }

        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['enableAuthFreeRead'])) {
            $model->enableAuthFreeRead = $map['enableAuthFreeRead'];
        }

        if (isset($map['enableAuthFreeWrite'])) {
            $model->enableAuthFreeWrite = $map['enableAuthFreeWrite'];
        }

        if (isset($map['enableAuthToken'])) {
            $model->enableAuthToken = $map['enableAuthToken'];
        }

        if (isset($map['extraInfo'])) {
            if (!empty($map['extraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['extraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['folderUrl'])) {
            $model->folderUrl = $map['folderUrl'];
        }

        if (isset($map['grafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['grafanaInstanceId'];
        }

        if (isset($map['grafanaInstanceName'])) {
            $model->grafanaInstanceName = $map['grafanaInstanceName'];
        }

        if (isset($map['httpApiInterUrl'])) {
            $model->httpApiInterUrl = $map['httpApiInterUrl'];
        }

        if (isset($map['httpApiIntraUrl'])) {
            $model->httpApiIntraUrl = $map['httpApiIntraUrl'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['paymentTypeUpdateTime'])) {
            $model->paymentTypeUpdateTime = $map['paymentTypeUpdateTime'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['prometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['prometheusInstanceId'];
        }

        if (isset($map['prometheusInstanceName'])) {
            $model->prometheusInstanceName = $map['prometheusInstanceName'];
        }

        if (isset($map['pushGatewayInterUrl'])) {
            $model->pushGatewayInterUrl = $map['pushGatewayInterUrl'];
        }

        if (isset($map['pushGatewayIntraUrl'])) {
            $model->pushGatewayIntraUrl = $map['pushGatewayIntraUrl'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['remoteReadInterUrl'])) {
            $model->remoteReadInterUrl = $map['remoteReadInterUrl'];
        }

        if (isset($map['remoteReadIntraUrl'])) {
            $model->remoteReadIntraUrl = $map['remoteReadIntraUrl'];
        }

        if (isset($map['remoteWriteInterUrl'])) {
            $model->remoteWriteInterUrl = $map['remoteWriteInterUrl'];
        }

        if (isset($map['remoteWriteIntraUrl'])) {
            $model->remoteWriteIntraUrl = $map['remoteWriteIntraUrl'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['storageDuration'])) {
            $model->storageDuration = $map['storageDuration'];
        }

        if (isset($map['supportAuthTypes'])) {
            if (!empty($map['supportAuthTypes'])) {
                $model->supportAuthTypes = [];
                $n1 = 0;
                foreach ($map['supportAuthTypes'] as $item1) {
                    $model->supportAuthTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
