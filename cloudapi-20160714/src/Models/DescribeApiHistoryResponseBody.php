<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\backendConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\customSystemParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\openIdConnectConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\resultDescriptions;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceParametersMap;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeApiHistoryResponseBody extends Model
{
    /**
     * @description If **AuthType** is set to **APP**, this parameter is required and it is used to specify the signature algorithm. If you did not specify a value, HmacSHA256 is used by default. Valid values:
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
     * @example bebf996e4b3d445d83078094b72b0d91
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example Backstage_MengMeng Broadcast_Seven Niu Cloud Push Stream Callback_Official
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The way in which AppCode authentication is supported. Default value: DEFAULT. Valid values:
     *
     *   DEFAULT: supported after being made available in Alibaba Cloud Marketplace.
     *   DISABLE: not supported.
     *   HEADER : supported only in the Header requests.
     *   HEADER_QUERY: supported in the Header or Query requests.
     *
     * @example HEADER
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @description The authentication method of the API. Valid values:
     *
     *   **APP: Only authorized applications can call the API.**
     *
     *   **ANONYMOUS: Anonymous users can call the API. Take note of the following rules:**
     *
     *   All users who have obtained the API service information can call this API. API Gateway neither authenticates callers nor sets user-specific throttling policies. If this API is a public one, set throttling policies for it.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description The backend configurations.
     *
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @description Indicates whether the backend service is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @description The constant parameters.
     *
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @description The custom system parameters.
     *
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @description The publishing time (UTC) of the API.
     *
     * @example 2021-06-1113:57:38
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description The description of the API.
     *
     * @example Queries weather based on the region name
     *
     * @var string
     */
    public $description;

    /**
     * @description *   If the value of **DisableInternet** is set to **true**, API calls are limited within the VPC.
     *   If the value of **DisableInternet** is set to **false**, the limit is lifted. The default value is false when you create an API.
     *
     * @example true
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description The sample error codes returned by the backend service.
     *
     * For more information, see [ErrorCodeSample](~~44392~~).
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @description The sample error response from the backend service.
     *
     * @example {"errorCode":"fail","errorMessage":"param invalid"}
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description *   If the value of **ForceNonceCheck** is set to **true**, X-Ca-Nonce must be checked during the request. This is the unique identifier of the request and is identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent replay attacks.
     *   If the value of **ForceNonceCheck** is set to **false**, the X-Ca-Nonce is not checked. The default value is false when you create an API.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The ID of the API group.
     *
     * @example cfb6ef799bf54fffabb0f02019ad2581
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example dev_api
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The historical version number.
     *
     * @example 20211022134156663
     *
     * @var string
     */
    public $historyVersion;

    /**
     * @description The configuration items of the third-party OpenID Connect authentication method.
     *
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @description The region where the API is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The configuration items of API requests sent by the consumer to API Gateway.
     *
     * For more information, see [RequestConfig](~~43985~~).
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description The ID of the request.
     *
     * @example 6C87A26A-6A18-4B8E-8099-705278381A2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters of API requests sent by the consumer to API Gateway.
     *
     * For more information, see [RequestParameter](~~43986~~).
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description The return description of the API.
     *
     * @example {}
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @description The return description of the API.
     *
     * @var resultDescriptions
     */
    public $resultDescriptions;

    /**
     * @description The sample response.
     *
     * @example {\n  \"status\": 0,\n  \"data\": {\n    \"count\": 1,\n    \"list\": [\n      \"352\"\n    ]\n  },\n  \"message\": \"success\"\n}
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The format of the return data.
     *
     * @example JSON
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The information about a backend service call.
     *
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @description The parameters of API requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceParameter](~~43988~~).
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @description The mappings between parameters of requests sent by the consumer to API Gateway and parameters of requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceParameterMap](~~43989~~).
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @description The environment to which the API is published.
     *
     *   **RELEASE**
     *   **PRE**: the pre-release environment
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The status of the API you called.
     *
     * @example 200
     *
     * @var string
     */
    public $status;

    /**
     * @description The common parameters of APIs in JSON format.
     *
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @description Indicates whether the API is public. Valid values:
     *
     *   **PUBLIC: The API is public. Public APIs are displayed on the APIs page for all users after the APIs are published to the production environment.**
     *   **PRIVATE: The API is private. Private APIs are not displayed in the Alibaba Cloud Marketplace after the API group to which they belong is made available.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;

    /**
     * @description The type of the WebSocket API. Valid values:
     *
     *   **COMMON**: general APIs
     *   **REGISTER**: APIs for registration
     *   **UNREGISTER**: APIs for deregistration
     *   **NOTIFY**: APIs for downstream notification
     *
     * For more information, see [Two-way communication](~~66031~~).
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
        'customSystemParameters' => 'CustomSystemParameters',
        'deployedTime'           => 'DeployedTime',
        'description'            => 'Description',
        'disableInternet'        => 'DisableInternet',
        'errorCodeSamples'       => 'ErrorCodeSamples',
        'failResultSample'       => 'FailResultSample',
        'forceNonceCheck'        => 'ForceNonceCheck',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'historyVersion'         => 'HistoryVersion',
        'openIdConnectConfig'    => 'OpenIdConnectConfig',
        'regionId'               => 'RegionId',
        'requestConfig'          => 'RequestConfig',
        'requestId'              => 'RequestId',
        'requestParameters'      => 'RequestParameters',
        'resultBodyModel'        => 'ResultBodyModel',
        'resultDescriptions'     => 'ResultDescriptions',
        'resultSample'           => 'ResultSample',
        'resultType'             => 'ResultType',
        'serviceConfig'          => 'ServiceConfig',
        'serviceParameters'      => 'ServiceParameters',
        'serviceParametersMap'   => 'ServiceParametersMap',
        'stageName'              => 'StageName',
        'status'                 => 'Status',
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
        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toMap() : null;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
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
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
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
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = null !== $this->resultDescriptions ? $this->resultDescriptions->toMap() : null;
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
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return DescribeApiHistoryResponseBody
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
        if (isset($map['CustomSystemParameters'])) {
            $model->customSystemParameters = customSystemParameters::fromMap($map['CustomSystemParameters']);
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
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
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
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
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = resultDescriptions::fromMap($map['ResultDescriptions']);
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
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
