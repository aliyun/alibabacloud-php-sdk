<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

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
use AlibabaCloud\Tea\Model;

class DescribeApiResponseBody extends Model
{
    /**
     * @description If **AuthType** is set to **APP**, this value must be passed to specify the signature algorithm. If you do not specify a value, HmacSHA256 is used by default. Valid values:
     *
     *   HmacSHA256
     *   HmacSHA1,HmacSHA256
     *
     * @example HmacSHA256
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @description The ID of the API.
     *
     * @example 8afff6c8c4c6447abb035812e4d66b65
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API, which is unique in the group.
     *
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description If **AuthType** is set to **APP**, the valid values are:
     *
     *   **DEFAULT**: The default value that is used if no other values are passed. This value means that the setting of the group is used.
     *   **DISABLE**: The authentication is disabled.
     *   **HEADER**: AppCode can be placed in the Header parameter for authentication.
     *   **HEADER_QUERY**: AppCode can be placed in the Header or Query parameter for authentication.
     *
     * @example HEADER
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @description The security authentication method of the API. Valid values:
     *
     *   **APP**: Only authorized applications can call the API.
     *
     *   **ANONYMOUS**: The API can be anonymously called. In this mode, you must take note of the following rules:
     *
     *   All users who have obtained the API service information can call this API. API Gateway does not authenticate callers and cannot set user-specific throttling policies. If you make this API public, set API-specific throttling policies.
     *   We recommend that you do not make the API whose security authentication method is ANONYMOUS available in Alibaba Cloud Marketplace because API Gateway cannot meter calls on the caller or limit the number of calls on the API. If you want to make the API group to which the API belongs available in Alibaba Cloud Marketplace, we recommend that you move the API to another group, set its type to PRIVATE, or set its security authentication method to APP.
     *
     *   **APPOPENID**: The OpenID Connect account authentication method is used. Only applications authorized by OpenID Connect can call the API. If this method is selected, the OpenIdConnectConfig parameter is required.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description Backend configurations
     *
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @description Specifies whether to enable backend services.
     *
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @description System parameters sent by API Gateway to the backend service
     *
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @description The creation time of the API.
     *
     * @example 2016-07-28T09:50:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description Custom system parameters
     *
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @description The API publishing status.
     *
     * @var deployedInfos
     */
    public $deployedInfos;

    /**
     * @description The description of the API.
     *
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to limit API calls to within the VPC. Valid values:
     *
     *   **true**: Only API calls from the VPC are supported.
     *   **false**: API calls from the VPC and Internet are both supported.
     *
     * @example false
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description The sample error codes returned by the backend service.
     *
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @description The sample error response from the backend service.
     *
     * @example 400
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description Specifies whether to carry the header : X-Ca-Nonce when calling an API. This is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent reply attacks. Valid values:
     *
     *   **true**: This field is forcibly checked when an API is requested to prevent replay attacks.
     *   **false**: This field is not checked.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The ID of the API group.
     *
     * @example 08ae4aa0f95e4321849ee57f4e0b3077
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example ApiTest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Specifies whether to enable the Mock mode. Valid values:
     *
     *   OPEN: The Mock mode is enabled.
     *   CLOSED: The Mock mode is not enabled.
     *
     * @example CLOSED
     *
     * @var string
     */
    public $mock;

    /**
     * @description The result returned for service mocking.
     *
     * @example test result
     *
     * @var string
     */
    public $mockResult;

    /**
     * @description The last modification time of the API.
     *
     * @example 2016-07-28T13:13:12Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description Configuration items of the third-party OpenID Connect authentication method
     *
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @description The region ID of the API.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The configuration items of API requests sent by the consumer to API Gateway.
     *
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description The ID of the request.
     *
     * @example D0FF585F-7966-40CF-BC60-75DB070B23D5<
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters of API requests sent by the consumer to API Gateway.
     *
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description The returned description of the API.
     *
     * @example {}
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @description The sample response from the backend service.
     *
     * @example 200
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The format of the response from the backend service. Valid values: JSON, TEXT, BINARY, XML, and HTML.
     *
     * @example JSON
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The configuration items of API requests that API Gateway sends to the backend service.
     *
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @description The parameters of API requests sent by API Gateway to the backend service.
     *
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @description The mappings between parameters of requests sent by the consumer to API Gateway and parameters of requests sent by API Gateway to the backend service.
     *
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @description System parameters sent by API Gateway to the backend service
     *
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @description Specifies whether to make the API public. Valid values:
     *
     *   **PUBLIC**: Make the API public. If you set this parameter to PUBLIC, this API is displayed on the APIs page for all users after the API is published to the production environment.
     *   **PRIVATE**: Make the API private. Private APIs are not displayed in the Alibaba Cloud Marketplace after the API group to which they belong is made available.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;

    /**
     * @description The type of the two-way communication API.
     *
     *   **COMMON**: common API
     *   **REGISTER**: registered API
     *   **UNREGISTER**: unregistered API
     *   **NOTIFY**: downstream notification API
     *
     * @example COMMON
     *
     * @var string
     */
    public $webSocketApiType;
    protected $_name = [
        'allowSignatureMethod'   => 'AllowSignatureMethod',
        'apiId'                  => 'ApiId',
        'apiName'                => 'ApiName',
        'appCodeAuthType'        => 'AppCodeAuthType',
        'authType'               => 'AuthType',
        'backendConfig'          => 'BackendConfig',
        'backendEnable'          => 'BackendEnable',
        'constantParameters'     => 'ConstantParameters',
        'createdTime'            => 'CreatedTime',
        'customSystemParameters' => 'CustomSystemParameters',
        'deployedInfos'          => 'DeployedInfos',
        'description'            => 'Description',
        'disableInternet'        => 'DisableInternet',
        'errorCodeSamples'       => 'ErrorCodeSamples',
        'failResultSample'       => 'FailResultSample',
        'forceNonceCheck'        => 'ForceNonceCheck',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'mock'                   => 'Mock',
        'mockResult'             => 'MockResult',
        'modifiedTime'           => 'ModifiedTime',
        'openIdConnectConfig'    => 'OpenIdConnectConfig',
        'regionId'               => 'RegionId',
        'requestConfig'          => 'RequestConfig',
        'requestId'              => 'RequestId',
        'requestParameters'      => 'RequestParameters',
        'resultBodyModel'        => 'ResultBodyModel',
        'resultSample'           => 'ResultSample',
        'resultType'             => 'ResultType',
        'serviceConfig'          => 'ServiceConfig',
        'serviceParameters'      => 'ServiceParameters',
        'serviceParametersMap'   => 'ServiceParametersMap',
        'systemParameters'       => 'SystemParameters',
        'visibility'             => 'Visibility',
        'webSocketApiType'       => 'WebSocketApiType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['BackendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toMap() : null;
        }
        if (null !== $this->backendEnable) {
            $res['BackendEnable'] = $this->backendEnable;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toMap() : null;
        }
        if (null !== $this->deployedInfos) {
            $res['DeployedInfos'] = null !== $this->deployedInfos ? $this->deployedInfos->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
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
            $res['OpenIdConnectConfig'] = null !== $this->openIdConnectConfig ? $this->openIdConnectConfig->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
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
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toMap() : null;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = null !== $this->serviceParameters ? $this->serviceParameters->toMap() : null;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = null !== $this->serviceParametersMap ? $this->serviceParametersMap->toMap() : null;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toMap() : null;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->webSocketApiType) {
            $res['WebSocketApiType'] = $this->webSocketApiType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiResponseBody
     */
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
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }

        return $model;
    }
}
