<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\customSystemParameters;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\deployedInfos;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\openIdConnectConfig;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\parametersMapObject;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\requestParametersObject;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\serviceParametersObject;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeApiResponseBody extends Model
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
     * @var string
     */
    public $createdTime;

    /**
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @var deployedInfos
     */
    public $deployedInfos;

    /**
     * @var string
     */
    public $description;

    /**
     * @var errorCodeSamples
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
    public $groupName;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;

    /**
     * @var string
     */
    public $originResultDescription;

    /**
     * @var parametersMapObject
     */
    public $parametersMapObject;

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
     * @var requestParametersObject
     */
    public $requestParametersObject;

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
     * @var serviceParametersObject
     */
    public $serviceParametersObject;

    /**
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $webSocketApiType;
    protected $_name = [
        'allowSignatureMethod'    => 'AllowSignatureMethod',
        'apiId'                   => 'ApiId',
        'apiName'                 => 'ApiName',
        'authType'                => 'AuthType',
        'constantParameters'      => 'ConstantParameters',
        'createdTime'             => 'CreatedTime',
        'customSystemParameters'  => 'CustomSystemParameters',
        'deployedInfos'           => 'DeployedInfos',
        'description'             => 'Description',
        'errorCodeSamples'        => 'ErrorCodeSamples',
        'failResultSample'        => 'FailResultSample',
        'groupId'                 => 'GroupId',
        'groupName'               => 'GroupName',
        'mock'                    => 'Mock',
        'mockResult'              => 'MockResult',
        'modifiedTime'            => 'ModifiedTime',
        'openIdConnectConfig'     => 'OpenIdConnectConfig',
        'originResultDescription' => 'OriginResultDescription',
        'parametersMapObject'     => 'ParametersMapObject',
        'regionId'                => 'RegionId',
        'requestConfig'           => 'RequestConfig',
        'requestId'               => 'RequestId',
        'requestParametersObject' => 'RequestParametersObject',
        'resultSample'            => 'ResultSample',
        'resultType'              => 'ResultType',
        'serviceConfig'           => 'ServiceConfig',
        'serviceParametersObject' => 'ServiceParametersObject',
        'systemParameters'        => 'SystemParameters',
        'visibility'              => 'Visibility',
        'webSocketApiType'        => 'WebSocketApiType',
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
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
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
        if (null !== $this->originResultDescription) {
            $res['OriginResultDescription'] = $this->originResultDescription;
        }
        if (null !== $this->parametersMapObject) {
            $res['ParametersMapObject'] = null !== $this->parametersMapObject ? $this->parametersMapObject->toMap() : null;
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
        if (null !== $this->requestParametersObject) {
            $res['RequestParametersObject'] = null !== $this->requestParametersObject ? $this->requestParametersObject->toMap() : null;
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
        if (null !== $this->serviceParametersObject) {
            $res['ServiceParametersObject'] = null !== $this->serviceParametersObject ? $this->serviceParametersObject->toMap() : null;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
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
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
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
        if (isset($map['OriginResultDescription'])) {
            $model->originResultDescription = $map['OriginResultDescription'];
        }
        if (isset($map['ParametersMapObject'])) {
            $model->parametersMapObject = parametersMapObject::fromMap($map['ParametersMapObject']);
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
        if (isset($map['RequestParametersObject'])) {
            $model->requestParametersObject = requestParametersObject::fromMap($map['RequestParametersObject']);
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
        if (isset($map['ServiceParametersObject'])) {
            $model->serviceParametersObject = serviceParametersObject::fromMap($map['ServiceParametersObject']);
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
