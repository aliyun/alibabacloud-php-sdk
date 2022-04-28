<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiConfigurationRequest extends Model
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
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $bodyFormat;

    /**
     * @var string
     */
    public $bodyModel;

    /**
     * @var string
     */
    public $contentTypeCategory;

    /**
     * @var string
     */
    public $contentTypeValue;

    /**
     * @var string
     */
    public $description;

    /**
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
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @var string
     */
    public $functionComputeConfig;

    /**
     * @var string
     */
    public $httpConfig;

    /**
     * @var string
     */
    public $mockConfig;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $ossConfig;

    /**
     * @var string
     */
    public $postBodyDescription;

    /**
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @var string
     */
    public $requestMode;

    /**
     * @var string
     */
    public $requestParameters;

    /**
     * @var string
     */
    public $requestPath;

    /**
     * @var string
     */
    public $requestProtocol;

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
    public $serviceParameters;

    /**
     * @var string
     */
    public $serviceParametersMap;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var bool
     */
    public $useBackendService;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $vpcConfig;
    protected $_name = [
        'allowSignatureMethod'  => 'AllowSignatureMethod',
        'apiId'                 => 'ApiId',
        'apiName'               => 'ApiName',
        'appCodeAuthType'       => 'AppCodeAuthType',
        'authType'              => 'AuthType',
        'backendName'           => 'BackendName',
        'bodyFormat'            => 'BodyFormat',
        'bodyModel'             => 'BodyModel',
        'contentTypeCategory'   => 'ContentTypeCategory',
        'contentTypeValue'      => 'ContentTypeValue',
        'description'           => 'Description',
        'disableInternet'       => 'DisableInternet',
        'errorCodeSamples'      => 'ErrorCodeSamples',
        'failResultSample'      => 'FailResultSample',
        'forceNonceCheck'       => 'ForceNonceCheck',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'httpConfig'            => 'HttpConfig',
        'mockConfig'            => 'MockConfig',
        'modelName'             => 'ModelName',
        'ossConfig'             => 'OssConfig',
        'postBodyDescription'   => 'PostBodyDescription',
        'requestHttpMethod'     => 'RequestHttpMethod',
        'requestMode'           => 'RequestMode',
        'requestParameters'     => 'RequestParameters',
        'requestPath'           => 'RequestPath',
        'requestProtocol'       => 'RequestProtocol',
        'resultSample'          => 'ResultSample',
        'resultType'            => 'ResultType',
        'securityToken'         => 'SecurityToken',
        'serviceParameters'     => 'ServiceParameters',
        'serviceParametersMap'  => 'ServiceParametersMap',
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceTimeout'        => 'ServiceTimeout',
        'useBackendService'     => 'UseBackendService',
        'visibility'            => 'Visibility',
        'vpcConfig'             => 'VpcConfig',
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
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }
        if (null !== $this->contentTypeCategory) {
            $res['ContentTypeCategory'] = $this->contentTypeCategory;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
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
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = $this->functionComputeConfig;
        }
        if (null !== $this->httpConfig) {
            $res['HttpConfig'] = $this->httpConfig;
        }
        if (null !== $this->mockConfig) {
            $res['MockConfig'] = $this->mockConfig;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = $this->ossConfig;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = $this->requestParameters;
        }
        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
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
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = $this->serviceParametersMap;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->useBackendService) {
            $res['UseBackendService'] = $this->useBackendService;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = $this->vpcConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiConfigurationRequest
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
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }
        if (isset($map['ContentTypeCategory'])) {
            $model->contentTypeCategory = $map['ContentTypeCategory'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
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
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = $map['FunctionComputeConfig'];
        }
        if (isset($map['HttpConfig'])) {
            $model->httpConfig = $map['HttpConfig'];
        }
        if (isset($map['MockConfig'])) {
            $model->mockConfig = $map['MockConfig'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['OssConfig'])) {
            $model->ossConfig = $map['OssConfig'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = $map['RequestParameters'];
        }
        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
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
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = $map['ServiceParametersMap'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['UseBackendService'])) {
            $model->useBackendService = $map['UseBackendService'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = $map['VpcConfig'];
        }

        return $model;
    }
}
