<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
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

class DescribeDeployedApiResponseBody extends Model
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
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableInternet;

    /**
     * @var errorCodeSamples
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
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @var string
     */
    public $resultBodyModel;

    /**
     * @var resultDescriptions
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
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'authType' => 'AuthType',
        'constantParameters' => 'ConstantParameters',
        'customSystemParameters' => 'CustomSystemParameters',
        'deployedTime' => 'DeployedTime',
        'description' => 'Description',
        'disableInternet' => 'DisableInternet',
        'errorCodeSamples' => 'ErrorCodeSamples',
        'failResultSample' => 'FailResultSample',
        'forceNonceCheck' => 'ForceNonceCheck',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'openIdConnectConfig' => 'OpenIdConnectConfig',
        'regionId' => 'RegionId',
        'requestConfig' => 'RequestConfig',
        'requestId' => 'RequestId',
        'requestParameters' => 'RequestParameters',
        'resultBodyModel' => 'ResultBodyModel',
        'resultDescriptions' => 'ResultDescriptions',
        'resultSample' => 'ResultSample',
        'resultType' => 'ResultType',
        'serviceConfig' => 'ServiceConfig',
        'serviceParameters' => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
        'stageName' => 'StageName',
        'systemParameters' => 'SystemParameters',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        if (null !== $this->constantParameters) {
            $this->constantParameters->validate();
        }
        if (null !== $this->customSystemParameters) {
            $this->customSystemParameters->validate();
        }
        if (null !== $this->errorCodeSamples) {
            $this->errorCodeSamples->validate();
        }
        if (null !== $this->openIdConnectConfig) {
            $this->openIdConnectConfig->validate();
        }
        if (null !== $this->requestConfig) {
            $this->requestConfig->validate();
        }
        if (null !== $this->requestParameters) {
            $this->requestParameters->validate();
        }
        if (null !== $this->resultDescriptions) {
            $this->resultDescriptions->validate();
        }
        if (null !== $this->serviceConfig) {
            $this->serviceConfig->validate();
        }
        if (null !== $this->serviceParameters) {
            $this->serviceParameters->validate();
        }
        if (null !== $this->serviceParametersMap) {
            $this->serviceParametersMap->validate();
        }
        if (null !== $this->systemParameters) {
            $this->systemParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toArray($noStream) : $this->constantParameters;
        }

        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toArray($noStream) : $this->customSystemParameters;
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
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toArray($noStream) : $this->errorCodeSamples;
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
            $res['OpenIdConnectConfig'] = null !== $this->openIdConnectConfig ? $this->openIdConnectConfig->toArray($noStream) : $this->openIdConnectConfig;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toArray($noStream) : $this->requestConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toArray($noStream) : $this->requestParameters;
        }

        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }

        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = null !== $this->resultDescriptions ? $this->resultDescriptions->toArray($noStream) : $this->resultDescriptions;
        }

        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toArray($noStream) : $this->serviceConfig;
        }

        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = null !== $this->serviceParameters ? $this->serviceParameters->toArray($noStream) : $this->serviceParameters;
        }

        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = null !== $this->serviceParametersMap ? $this->serviceParametersMap->toArray($noStream) : $this->serviceParametersMap;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toArray($noStream) : $this->systemParameters;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
