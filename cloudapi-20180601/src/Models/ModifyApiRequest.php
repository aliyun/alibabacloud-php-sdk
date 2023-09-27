<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiRequest extends Model
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
    public $authType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $openIdConnectConfig;

    /**
     * @var string
     */
    public $requestConfig;

    /**
     * @var string
     */
    public $requestParamters;

    /**
     * @var string
     */
    public $resultDescriptions;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $securityToken;

    /**
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
    public $visibility;

    /**
     * @var string
     */
    public $webSocketApiType;
    protected $_name = [
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'authType'             => 'AuthType',
        'description'          => 'Description',
        'errorCodeSamples'     => 'ErrorCodeSamples',
        'failResultSample'     => 'FailResultSample',
        'groupId'              => 'GroupId',
        'openIdConnectConfig'  => 'OpenIdConnectConfig',
        'requestConfig'        => 'RequestConfig',
        'requestParamters'     => 'RequestParamters',
        'resultDescriptions'   => 'ResultDescriptions',
        'resultSample'         => 'ResultSample',
        'resultType'           => 'ResultType',
        'securityToken'        => 'SecurityToken',
        'serviceConfig'        => 'ServiceConfig',
        'serviceParameters'    => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
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
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = $this->errorCodeSamples;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
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
        if (null !== $this->requestParamters) {
            $res['RequestParamters'] = $this->requestParamters;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = $map['ErrorCodeSamples'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
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
        if (isset($map['RequestParamters'])) {
            $model->requestParamters = $map['RequestParamters'];
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
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }

        return $model;
    }
}
