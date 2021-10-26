<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $webSocketApiType;

    /**
     * @var bool
     */
    public $disableInternet;

    /**
     * @var string
     */
    public $resultBodyModel;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $historyVersion;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @var resultDescriptions
     */
    public $resultDescriptions;

    /**
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @var serviceParametersMap
     */
    public $serviceParametersMap;
    protected $_name = [
        'status'                 => 'Status',
        'apiId'                  => 'ApiId',
        'resultType'             => 'ResultType',
        'webSocketApiType'       => 'WebSocketApiType',
        'disableInternet'        => 'DisableInternet',
        'resultBodyModel'        => 'ResultBodyModel',
        'resultSample'           => 'ResultSample',
        'appCodeAuthType'        => 'AppCodeAuthType',
        'allowSignatureMethod'   => 'AllowSignatureMethod',
        'regionId'               => 'RegionId',
        'forceNonceCheck'        => 'ForceNonceCheck',
        'visibility'             => 'Visibility',
        'failResultSample'       => 'FailResultSample',
        'authType'               => 'AuthType',
        'requestId'              => 'RequestId',
        'description'            => 'Description',
        'groupName'              => 'GroupName',
        'groupId'                => 'GroupId',
        'deployedTime'           => 'DeployedTime',
        'stageName'              => 'StageName',
        'historyVersion'         => 'HistoryVersion',
        'apiName'                => 'ApiName',
        'requestConfig'          => 'RequestConfig',
        'serviceConfig'          => 'ServiceConfig',
        'openIdConnectConfig'    => 'OpenIdConnectConfig',
        'errorCodeSamples'       => 'ErrorCodeSamples',
        'resultDescriptions'     => 'ResultDescriptions',
        'systemParameters'       => 'SystemParameters',
        'customSystemParameters' => 'CustomSystemParameters',
        'constantParameters'     => 'ConstantParameters',
        'requestParameters'      => 'RequestParameters',
        'serviceParameters'      => 'ServiceParameters',
        'serviceParametersMap'   => 'ServiceParametersMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->webSocketApiType) {
            $res['WebSocketApiType'] = $this->webSocketApiType;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->appCodeAuthType) {
            $res['AppCodeAuthType'] = $this->appCodeAuthType;
        }
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toMap() : null;
        }
        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = null !== $this->openIdConnectConfig ? $this->openIdConnectConfig->toMap() : null;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = null !== $this->resultDescriptions ? $this->resultDescriptions->toMap() : null;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toMap() : null;
        }
        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toMap() : null;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toMap() : null;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = null !== $this->serviceParameters ? $this->serviceParameters->toMap() : null;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = null !== $this->serviceParametersMap ? $this->serviceParametersMap->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['ResultBodyModel'])) {
            $model->resultBodyModel = $map['ResultBodyModel'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['AppCodeAuthType'])) {
            $model->appCodeAuthType = $map['AppCodeAuthType'];
        }
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = serviceConfig::fromMap($map['ServiceConfig']);
        }
        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = openIdConnectConfig::fromMap($map['OpenIdConnectConfig']);
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = resultDescriptions::fromMap($map['ResultDescriptions']);
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = systemParameters::fromMap($map['SystemParameters']);
        }
        if (isset($map['CustomSystemParameters'])) {
            $model->customSystemParameters = customSystemParameters::fromMap($map['CustomSystemParameters']);
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = constantParameters::fromMap($map['ConstantParameters']);
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = serviceParameters::fromMap($map['ServiceParameters']);
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = serviceParametersMap::fromMap($map['ServiceParametersMap']);
        }

        return $model;
    }
}
