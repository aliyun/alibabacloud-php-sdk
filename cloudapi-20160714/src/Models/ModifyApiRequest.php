<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiRequest extends Model
{
    /**
     * @example HmacSHA256
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @example 8afff6c8c4c6447abb035812e4d66b65
     *
     * @var string
     */
    public $apiId;

    /**
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @example DEFAULT
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @example true
     *
     * @var bool
     */
    public $backendEnable;

    /**
     * @example 0d105f80a8f340408bd34954d4e4ff22
     *
     * @var string
     */
    public $backendId;

    /**
     * @example [{\"ServiceParameterName\":\"HOST\",\"ConstantValue\":\"uat-cgi.smarket.net.cn\",\"Location\":\"HEAD\",\"Description\":\"\\u540e\\u7aefVPC-HOST\"}]
     *
     * @var string
     */
    public $constantParameters;

    /**
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @example [{"Code":"400","Message":"Missing the userId","Description":"param invalid"}]
     *
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @example {"errorCode":"fail","errorMessage":"param invalid"}
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @example {\"OpenIdApiType\":\"IDTOKEN\",\"PublicKey\":\"lzlj1573\",\"IdTokenParamName\":\"\",\"PublicKeyId\":\"lzljorders\"}
     *
     * @var string
     */
    public $openIdConnectConfig;

    /**
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
     * @example {}
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @example []
     *
     * @var string
     */
    public $resultDescriptions;

    /**
     * @example 200
     *
     * @var string
     */
    public $resultSample;

    /**
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
     * @example {"ServiceProtocol":"HTTP","ServiceHttpMethod":"GET","ServiceAddress":"http://www.customerdomain.com","ServiceTimeout":"1000","ServicePath":"/v3/getUserTest/[userId]"}
     *
     * @var string
     */
    public $serviceConfig;

    /**
     * @example [{"ServiceParameterName":"age","Location":"Head","Type":"Number","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"sex","Location":"Query","Type":"String","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"userId","Location":"Path","Type":"Number","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"clientIp","Location":"Head","Type":"String","ParameterCatalog":"SYSTEM"},{"ServiceParameterName":"constance","Location":"Head","Type":"String","ParameterCatalog":"CONSTANT"}]
     *
     * @var string
     */
    public $serviceParameters;

    /**
     * @example [{"ServiceParameterName":"age","RequestParameterName":"age"},{"ServiceParameterName":"sex","RequestParameterName":"sex"},{"ServiceParameterName":"userId","RequestParameterName":"userId"},{"ServiceParameterName":"clientIp","RequestParameterName":"CaClientIp"},{"ServiceParameterName":"constance","RequestParameterName":"constance"}]
     *
     * @var string
     */
    public $serviceParametersMap;

    /**
     * @example [{\"ParameterName\": \"CaAppId\", \"Location\": \"HEAD\", \"ServiceParameterName\": \"x-ca-appid\"}]
     *
     * @var string
     */
    public $systemParameters;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;

    /**
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
