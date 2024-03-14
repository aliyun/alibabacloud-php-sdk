<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiRequest extends Model
{
    /**
     * @description The type of the two-way communication API. Valid values:
     *
     *   **COMMON**: general APIs
     *   **REGISTER**: registered APIs
     *   **UNREGISTER**: unregistered APIs
     *   **NOTIFY**: downstream notification
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
     * @description The name of the API. The name must be unique within the API group. The name must be 4 to 50 characters in length. It must start with a letter and can contain letters, digits, and underscores (\_).
     *
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The ID of the backend service.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @description The configuration items of API requests sent by the consumer to API Gateway.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description Configuration Mode
     *
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @description Specifies whether to enable backend services.
     *
     * @example 0d105f80a8f340408bd34954d4e4ff22
     *
     * @var string
     */
    public $backendId;

    /**
     * @var string
     */
    public $constantParameters;

    /**
     * @description The description of the API. The description can be up to 180 characters in length.
     *
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @description The AppCode authentication type supported. Valid values:
     *
     *   DEFAULT: supported after being made available in Alibaba Cloud Marketplace
     *   DISABLE: not supported
     *   HEADER : supported only in the Header parameter
     *   HEADER_QUERY: supported in the Header or Query parameter
     *
     * @example true
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @description *   Specifies whether to set DisableInternet to **true** to limit API calls to within the VPC.
     *   If you set DisableInternet to **false**, the limit if lifted.
     *
     * >  If you do not set this parameter, the original value is used.
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The ID of the API group.
     *
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The client-side request signature method of the API. Valid values:
     *
     *   HmacSHA256
     *   HmacSHA1,HmacSHA256
     *
     * @example {\"OpenIdApiType\":\"IDTOKEN\",\"PublicKey\":\"lzlj1573\",\"IdTokenParamName\":\"\",\"PublicKeyId\":\"lzljorders\"}
     *
     * @var string
     */
    public $openIdConnectConfig;

    /**
     * @description The configuration items of API requests sent by API Gateway to the backend service.
     *
     * @example {"RequestProtocol":"HTTP","RequestHttpMethod":"GET","RequestPath":"/v3/getUserTest/[userId]","BodyFormat":"FORM","PostBodyDescription":""}
     *
     * @var string
     */
    public $requestConfig;

    /**
     * @var string
     */
    public $requestParameters;

    /**
     * @description *   Specifies whether to set **ForceNonceCheck** to **true** to force the check of X-Ca-Nonce during the request. This is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent replay attacks.
     *   If you set **ForceNonceCheck** to **false**, the check is not performed. If you do not set this parameter, the original value is used.
     *
     * @example {}
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @var string
     */
    public $resultDescriptions;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @description The sample response from the backend service.
     *
     * @example HTML
     *
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The parameters of API requests sent by the consumer to API Gateway.
     *
     * @example {"ServiceProtocol":"HTTP","ServiceHttpMethod":"GET","ServiceAddress":"http://www.customerdomain.com","ServiceTimeout":"1000","ServicePath":"/v3/getUserTest/[userId]"}
     *
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $serviceParameters;

    /**
     * @var string
     */
    public $serviceParametersMap;

    /**
     * @var string
     */
    public $systemParameters;

    /**
     * @description Specifies whether the API is public. Valid values:
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
     * @description The returned description of the API.
     *
     * @example COMMON
     *
     * @var string
     */
    public $webSocketApiType;
    protected $_name = [
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'appCodeAuthType'      => 'AppCodeAuthType',
        'authType'             => 'AuthType',
        'backendEnable'        => 'BackendEnable',
        'backendId'            => 'BackendId',
        'constantParameters'   => 'ConstantParameters',
        'description'          => 'Description',
        'disableInternet'      => 'DisableInternet',
        'errorCodeSamples'     => 'ErrorCodeSamples',
        'failResultSample'     => 'FailResultSample',
        'forceNonceCheck'      => 'ForceNonceCheck',
        'groupId'              => 'GroupId',
        'openIdConnectConfig'  => 'OpenIdConnectConfig',
        'requestConfig'        => 'RequestConfig',
        'requestParameters'    => 'RequestParameters',
        'resultBodyModel'      => 'ResultBodyModel',
        'resultDescriptions'   => 'ResultDescriptions',
        'resultSample'         => 'ResultSample',
        'resultType'           => 'ResultType',
        'securityToken'        => 'SecurityToken',
        'serviceConfig'        => 'ServiceConfig',
        'serviceParameters'    => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
        'systemParameters'     => 'SystemParameters',
        'visibility'           => 'Visibility',
        'webSocketApiType'     => 'WebSocketApiType',
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
        if (null !== $this->backendEnable) {
            $res['BackendEnable'] = $this->backendEnable;
        }
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = $this->constantParameters;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = $this->errorCodeSamples;
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
        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = $this->openIdConnectConfig;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = $this->requestConfig;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = $this->requestParameters;
        }
        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = $this->resultDescriptions;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = $this->serviceParametersMap;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = $this->systemParameters;
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
     * @return ModifyApiRequest
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
        if (isset($map['BackendEnable'])) {
            $model->backendEnable = $map['BackendEnable'];
        }
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = $map['ConstantParameters'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = $map['ErrorCodeSamples'];
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
        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = $map['OpenIdConnectConfig'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = $map['RequestConfig'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = $map['RequestParameters'];
        }
        if (isset($map['ResultBodyModel'])) {
            $model->resultBodyModel = $map['ResultBodyModel'];
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = $map['ResultDescriptions'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = $map['ServiceParametersMap'];
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = $map['SystemParameters'];
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
