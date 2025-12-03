<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\backendConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\customSystemParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\deployedInfos;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\openIdConnectConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceParametersMap;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\systemParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\tagList;

class DescribeApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @var bool
     */
    public $backendEnable;

    /**
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @var deployedInfos
     */
    public $deployedInfos;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableInternet;

    /**
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @var string
     */
    public $resultBodyModel;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @var tagList
     */
    public $tagList;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $webSocketApiType;
    protected $_name = [
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appCodeAuthType' => 'AppCodeAuthType',
        'authType' => 'AuthType',
        'backendConfig' => 'BackendConfig',
        'backendEnable' => 'BackendEnable',
        'constantParameters' => 'ConstantParameters',
        'createdTime' => 'CreatedTime',
        'customSystemParameters' => 'CustomSystemParameters',
        'deployedInfos' => 'DeployedInfos',
        'description' => 'Description',
        'disableInternet' => 'DisableInternet',
        'errorCodeSamples' => 'ErrorCodeSamples',
        'failResultSample' => 'FailResultSample',
        'forceNonceCheck' => 'ForceNonceCheck',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'mock' => 'Mock',
        'mockResult' => 'MockResult',
        'modifiedTime' => 'ModifiedTime',
        'openIdConnectConfig' => 'OpenIdConnectConfig',
        'regionId' => 'RegionId',
        'requestConfig' => 'RequestConfig',
        'requestId' => 'RequestId',
        'requestParameters' => 'RequestParameters',
        'resultBodyModel' => 'ResultBodyModel',
        'resultSample' => 'ResultSample',
        'resultType' => 'ResultType',
        'serviceConfig' => 'ServiceConfig',
        'serviceParameters' => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
        'systemParameters' => 'SystemParameters',
        'tagList' => 'TagList',
        'visibility' => 'Visibility',
        'webSocketApiType' => 'WebSocketApiType',
    ];

    public function validate()
    {
        if (null !== $this->backendConfig) {
            $this->backendConfig->validate();
        }
        if (null !== $this->constantParameters) {
            $this->constantParameters->validate();
        }
        if (null !== $this->customSystemParameters) {
            $this->customSystemParameters->validate();
        }
        if (null !== $this->deployedInfos) {
            $this->deployedInfos->validate();
        }
        if (null !== $this->errorCodeSamples) {
            $this->errorCodeSamples->validate();
        }
        if (null !== $this->openIdConnectConfig) {
            $this->openIdConnectConfig->validate();
        }
        if (null !== $this->requestConfig) {
            $this->requestConfig->validate();
        }
        if (null !== $this->requestParameters) {
            $this->requestParameters->validate();
        }
        if (null !== $this->serviceConfig) {
            $this->serviceConfig->validate();
        }
        if (null !== $this->serviceParameters) {
            $this->serviceParameters->validate();
        }
        if (null !== $this->serviceParametersMap) {
            $this->serviceParametersMap->validate();
        }
        if (null !== $this->systemParameters) {
            $this->systemParameters->validate();
        }
        if (null !== $this->tagList) {
            $this->tagList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->appCodeAuthType) {
            $res['AppCodeAuthType'] = $this->appCodeAuthType;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->backendConfig) {
            $res['BackendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toArray($noStream) : $this->backendConfig;
        }

        if (null !== $this->backendEnable) {
            $res['BackendEnable'] = $this->backendEnable;
        }

        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toArray($noStream) : $this->constantParameters;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toArray($noStream) : $this->customSystemParameters;
        }

        if (null !== $this->deployedInfos) {
            $res['DeployedInfos'] = null !== $this->deployedInfos ? $this->deployedInfos->toArray($noStream) : $this->deployedInfos;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }

        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toArray($noStream) : $this->errorCodeSamples;
        }

        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }

        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }

        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = null !== $this->openIdConnectConfig ? $this->openIdConnectConfig->toArray($noStream) : $this->openIdConnectConfig;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toArray($noStream) : $this->requestConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toArray($noStream) : $this->requestParameters;
        }

        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }

        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toArray($noStream) : $this->serviceConfig;
        }

        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = null !== $this->serviceParameters ? $this->serviceParameters->toArray($noStream) : $this->serviceParameters;
        }

        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = null !== $this->serviceParametersMap ? $this->serviceParametersMap->toArray($noStream) : $this->serviceParametersMap;
        }

        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toArray($noStream) : $this->systemParameters;
        }

        if (null !== $this->tagList) {
            $res['TagList'] = null !== $this->tagList ? $this->tagList->toArray($noStream) : $this->tagList;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->webSocketApiType) {
            $res['WebSocketApiType'] = $this->webSocketApiType;
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
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['AppCodeAuthType'])) {
            $model->appCodeAuthType = $map['AppCodeAuthType'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['BackendConfig'])) {
            $model->backendConfig = backendConfig::fromMap($map['BackendConfig']);
        }

        if (isset($map['BackendEnable'])) {
            $model->backendEnable = $map['BackendEnable'];
        }

        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = constantParameters::fromMap($map['ConstantParameters']);
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CustomSystemParameters'])) {
            $model->customSystemParameters = customSystemParameters::fromMap($map['CustomSystemParameters']);
        }

        if (isset($map['DeployedInfos'])) {
            $model->deployedInfos = deployedInfos::fromMap($map['DeployedInfos']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }

        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }

        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }

        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }

        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = openIdConnectConfig::fromMap($map['OpenIdConnectConfig']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }

        if (isset($map['ResultBodyModel'])) {
            $model->resultBodyModel = $map['ResultBodyModel'];
        }

        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = serviceConfig::fromMap($map['ServiceConfig']);
        }

        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = serviceParameters::fromMap($map['ServiceParameters']);
        }

        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = serviceParametersMap::fromMap($map['ServiceParametersMap']);
        }

        if (isset($map['SystemParameters'])) {
            $model->systemParameters = systemParameters::fromMap($map['SystemParameters']);
        }

        if (isset($map['TagList'])) {
            $model->tagList = tagList::fromMap($map['TagList']);
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }

        return $model;
    }
}
