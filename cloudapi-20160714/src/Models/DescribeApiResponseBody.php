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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\resultDescriptions;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceParametersMap;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeApiResponseBody extends Model
{
    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example HmacSHA256
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @description Description
     *
     * @example 8afff6c8c4c6447abb035812e4d66b65
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The minimum parameter value when **ParameterType** is set to Int, Long, Float, or Double.
     *
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The request mode. Valid values: MAPPING and PASSTHROUGH.
     *
     * @example HEADER
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @description The sample error codes returned by the backend service.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description The timeout period of the backend service. Unit: milliseconds.
     *
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @description The corresponding frontend parameter name. It must be included in RequestParametersObject and matches ApiParameterName in RequestParameter data.
     *
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @description The name of the backend service parameter.
     *
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @description The type of the Function Compute instance.
     *
     * @example 2016-07-28T09:50:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The name of the HTTP header.
     *
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @description DescribeApi
     *
     * @var deployedInfos
     */
    public $deployedInfos;

    /**
     * @description Specifies whether to enable the VPC channel. Valid values:
     *
     *   **TRUE**: The VPC channel is enabled. You must create the corresponding VPC access authorization before you can enable a VPC channel.
     *   **FALSE**: The VPC channel is not enabled.
     *
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @description The API request path. If the complete API URL is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, the API request path is ` /object/add  `.
     *
     * @example false
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description The name of the VPC access authorization.
     *
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @description The maximum parameter value when **ParameterType** is set to Int, Long, Float, or Double.
     *
     * @example 400
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description The ID of the result.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The path used to call the back-end service. If the complete back-end service path is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, **ServicePath** is `/object/add`.
     *
     * @example 08ae4aa0f95e4321849ee57f4e0b3077
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the parent node.
     *
     * @example ApiTest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the API.
     *
     * @example CLOSED
     *
     * @var string
     */
    public $mock;

    /**
     * @description The ID of the API group.
     *
     * @example test result
     *
     * @var string
     */
    public $mockResult;

    /**
     * @description Backend configuration items when the backend service is Function Compute
     *
     * @example 2016-07-28T13:13:12Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The description of the API.
     *
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Age
     *
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example D0FF585F-7966-40CF-BC60-75DB070B23D5<
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description The ID of the API group.
     *
     * @example {}
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @description The last modification time of the API.
     *
     * @var resultDescriptions
     */
    public $resultDescriptions;

    /**
     * @description The ID of the ECS or SLB instance in the VPC.
     *
     * @example 200
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example JSON
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role to be assumed by API Gateway to access Function Compute.
     *
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @description The Arn that is authorized by a RAM user to EventBridge.
     *
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @description Error codes
     *
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @description If **AuthType** is set to **APP**, the valid values are:
     *
     *   **DEFAULT**: The default value that is used if no other values are passed. This value means that the setting of the group is used.
     *   **DISABLE**: The authentication is disabled.
     *   **HEADER**: AppCode can be placed in the Header parameter for authentication.
     *   **HEADER_QUERY**: AppCode can be placed in the Header or Query parameter for authentication.
     *
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @description Specifies whether to limit API calls to within the VPC. Valid values:
     *
     *   **true**: Only API calls from the VPC are supported.
     *   **false**: API calls from the VPC and Internet are both supported.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;

    /**
     * @description The ID of the region where the OSS instance is located.
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
        'resultDescriptions'     => 'ResultDescriptions',
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
