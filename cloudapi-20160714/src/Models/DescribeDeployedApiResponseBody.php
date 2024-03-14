<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\customSystemParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\openIdConnectConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\resultDescriptions;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParametersMap;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeDeployedApiResponseBody extends Model
{
    /**
     * @description The signature method used by the client. Valid values:
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
     * @example 4eed13a57d4e42fbb51316be8a5329ff
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API
     *
     * @example weather
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The security authentication method of the API. Valid values:
     *
     *   **APP: Only authorized applications can call the API.**
     *
     *   **ANONYMOUS: The API can be anonymously called. In this mode, you must take note of the following rules:**
     *
     *   All users who have obtained the API service information can call this API. API Gateway does not authenticate callers and cannot set user-specific throttling policies. If you make this API public, set API-specific throttling policies.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

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
     * @description The deployment time. Format: yyyy-mm-ddhh:mm:ss.
     *
     * @example 2022-07-25T17:47:51Z
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description The description.
     *
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @description *   Specifies whether to set DisableInternet to **true** to limit API calls to within the VPC.
     *   If you set DisableInternet to **false**, the limit is lifted.
     *
     * >  If you do not set this parameter, the original value is not modified.
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
     * @description *   Specifies whether to set **ForceNonceCheck** to **true** to force the check of X-Ca-Nonce during the request. This is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent replay attacks.
     *   If you set **ForceNonceCheck** to **false**, the check is not performed. The default value is false when you create an API.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The ID of the API group.
     *
     * @example bc77f5b49c974437a9912ea3755cd834
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example Weather
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The configuration items of the third-party OpenID Connect authentication method.
     *
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @description The region to which the API group belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Configuration items of API requests sent by the consumer to API Gateway.
     *
     * For more information, see [RequestConfig](~~43985~~).
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description The ID of the request.
     *
     * @example EF924FE4-2EDD-4CD3-89EC-34E4708574E7
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
     * @description The sample response from the backend service.
     *
     * @example {code: 200, message:\"success\", data: \"\"}
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The format of the response from the backend service. Valid values: JSON, TEXT, BINARY, XML, and HTML. Default value: JSON.
     *
     * @example HTML
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The configuration items of API requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceConfig](~~43987~~).
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
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **PRE: the pre-release environment**
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description System parameters
     *
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @description Specifies whether to make the API public. Valid values:
     *
     *   **PUBLIC**: Make the API public. If you set this parameter to PUBLIC, this API is displayed on the APIs page for all users after the API is published to the production environment.**
     *   **PRIVATE**: Make the API private. Private APIs are not displayed in the Alibaba Cloud Marketplace after the API group to which they belong is made available.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'allowSignatureMethod'   => 'AllowSignatureMethod',
        'apiId'                  => 'ApiId',
        'apiName'                => 'ApiName',
        'authType'               => 'AuthType',
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
        'systemParameters'       => 'SystemParameters',
        'visibility'             => 'Visibility',
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
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
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
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toMap() : null;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeployedApiResponseBody
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
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
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = systemParameters::fromMap($map['SystemParameters']);
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
