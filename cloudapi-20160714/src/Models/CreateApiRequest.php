<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiRequest extends Model
{
    /**
     * @description If the **AuthType** is **APP** authentication, you need to pass this value to specify the signature algorithm. If you do not specify this parameter, the default value HmacSHA256 is used. Valid values:
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
     * @description The name of the API that you want to create. The name must be unique within the API group. The name must be 4 to 50 characters in length. It must start with a letter and can contain letters, digits, and underscores (\_).
     *
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description If the **AuthType** parameter is set to **APP**, the valid values are:
     *
     *   **DEFAULT**: The default value that is used if no other values are passed. This value indicates that the settings of the group are used.
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
     * @description API安全认证类型，目前可以取值：
     *
     * - **APP**：只允许已授权的APP调用
     * - **ANONYMOUS**：允许匿名调用，设置为允许匿名调用需要注意：
     * 任何能够获取该API服务信息的人，都将能够调用该API。网关不会对调用者做身份认证，也无法设置按用户的流量控制，若开放该API请设置好按API的流量控制。
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description Specifies whether to enable backend services.
     *
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @description The IDof the backend service
     *
     * @example a0305308908c4740aba9cbfd63ba99b7
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
     * @description *   Specifies whether to set **DisableInternet** to **true** to limit API calls to within the VPC.
     *   If you set **DisableInternet** to **false**, the limit is lifted. The default value is false when you create an API.
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
     * @example 08ae4aa0f95e4321849ee57f4e0b3077
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The switch status of ACL. Valid values:- **on** and **off**.
     *
     * @example {\"openIdApiType\":null,\"idTokenParamName\":null,\"publicKeyId\":null,\"publicKey\":null}
     *
     * @var string
     */
    public $openIdConnectConfig;

    /**
     * @description The configuration items of API requests sent by the consumer to API Gateway.
     *
     * For more information, see [RequestConfig](~~43985~~).
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
     * @description The return description of the API.
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
     * @description The format of the response from the backend service. Valid values: JSON, TEXT, BINARY, XML, and HTML. Default value: JSON.
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
     * @description The configuration items of API requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceConfig](~~43987~~).
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
        'allowSignatureMethod' => 'AllowSignatureMethod',
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
     * @return CreateApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
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
