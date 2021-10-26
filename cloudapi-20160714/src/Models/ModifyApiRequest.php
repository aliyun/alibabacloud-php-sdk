<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

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
    public $description;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $requestConfig;

    /**
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $requestParameters;

    /**
     * @var string
     */
    public $systemParameters;

    /**
     * @var string
     */
    public $constantParameters;

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
    public $resultType;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @var string
     */
    public $resultDescriptions;

    /**
     * @var string
     */
    public $openIdConnectConfig;

    /**
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @var string
     */
    public $webSocketApiType;

    /**
     * @var string
     */
    public $resultBodyModel;

    /**
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @var bool
     */
    public $disableInternet;

    /**
     * @var string
     */
    public $appCodeAuthType;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'groupId'              => 'GroupId',
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'description'          => 'Description',
        'visibility'           => 'Visibility',
        'authType'             => 'AuthType',
        'requestConfig'        => 'RequestConfig',
        'serviceConfig'        => 'ServiceConfig',
        'requestParameters'    => 'RequestParameters',
        'systemParameters'     => 'SystemParameters',
        'constantParameters'   => 'ConstantParameters',
        'serviceParameters'    => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
        'resultType'           => 'ResultType',
        'resultSample'         => 'ResultSample',
        'failResultSample'     => 'FailResultSample',
        'errorCodeSamples'     => 'ErrorCodeSamples',
        'resultDescriptions'   => 'ResultDescriptions',
        'openIdConnectConfig'  => 'OpenIdConnectConfig',
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'webSocketApiType'     => 'WebSocketApiType',
        'resultBodyModel'      => 'ResultBodyModel',
        'forceNonceCheck'      => 'ForceNonceCheck',
        'disableInternet'      => 'DisableInternet',
        'appCodeAuthType'      => 'AppCodeAuthType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = $this->requestConfig;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = $this->requestParameters;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = $this->systemParameters;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = $this->constantParameters;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = $this->serviceParametersMap;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = $this->errorCodeSamples;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = $this->resultDescriptions;
        }
        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = $this->openIdConnectConfig;
        }
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
        }
        if (null !== $this->webSocketApiType) {
            $res['WebSocketApiType'] = $this->webSocketApiType;
        }
        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->appCodeAuthType) {
            $res['AppCodeAuthType'] = $this->appCodeAuthType;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = $map['RequestConfig'];
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = $map['RequestParameters'];
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = $map['SystemParameters'];
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = $map['ConstantParameters'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = $map['ServiceParametersMap'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = $map['ErrorCodeSamples'];
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = $map['ResultDescriptions'];
        }
        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = $map['OpenIdConnectConfig'];
        }
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
        }
        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }
        if (isset($map['ResultBodyModel'])) {
            $model->resultBodyModel = $map['ResultBodyModel'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['AppCodeAuthType'])) {
            $model->appCodeAuthType = $map['AppCodeAuthType'];
        }

        return $model;
    }
}
