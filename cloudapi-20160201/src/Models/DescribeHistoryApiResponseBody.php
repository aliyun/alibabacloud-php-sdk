<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\pathParameters;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\requestBody;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\requestHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\requestQueries;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponseBody\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeHistoryApiResponseBody extends Model
{
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
    public $bodyFormat;

    /**
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

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
    public $historyVersion;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $httpProtocol;

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
    public $originResultDescription;

    /**
     * @var string
     */
    public $path;

    /**
     * @var pathParameters
     */
    public $pathParameters;

    /**
     * @var string
     */
    public $postBodyDescription;

    /**
     * @var string
     */
    public $postBodyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var requestBody
     */
    public $requestBody;

    /**
     * @var requestHeaders
     */
    public $requestHeaders;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestQueries
     */
    public $requestQueries;

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
    public $serviceAddress;

    /**
     * @var string
     */
    public $serviceFCEnable;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @var string
     */
    public $status;

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
    public $vpcName;
    protected $_name = [
        'apiId'                   => 'ApiId',
        'apiName'                 => 'ApiName',
        'authType'                => 'AuthType',
        'bodyFormat'              => 'BodyFormat',
        'constantParameters'      => 'ConstantParameters',
        'deployedTime'            => 'DeployedTime',
        'description'             => 'Description',
        'errorCodeSamples'        => 'ErrorCodeSamples',
        'functionComputeConfig'   => 'FunctionComputeConfig',
        'groupId'                 => 'GroupId',
        'groupName'               => 'GroupName',
        'historyVersion'          => 'HistoryVersion',
        'httpMethod'              => 'HttpMethod',
        'httpProtocol'            => 'HttpProtocol',
        'mock'                    => 'Mock',
        'mockResult'              => 'MockResult',
        'originResultDescription' => 'OriginResultDescription',
        'path'                    => 'Path',
        'pathParameters'          => 'PathParameters',
        'postBodyDescription'     => 'PostBodyDescription',
        'postBodyType'            => 'PostBodyType',
        'regionId'                => 'RegionId',
        'requestBody'             => 'RequestBody',
        'requestHeaders'          => 'RequestHeaders',
        'requestId'               => 'RequestId',
        'requestQueries'          => 'RequestQueries',
        'resultSample'            => 'ResultSample',
        'resultType'              => 'ResultType',
        'serviceAddress'          => 'ServiceAddress',
        'serviceFCEnable'         => 'ServiceFCEnable',
        'serviceProtocol'         => 'ServiceProtocol',
        'serviceTimeout'          => 'ServiceTimeout',
        'serviceVpcEnable'        => 'ServiceVpcEnable',
        'status'                  => 'Status',
        'systemParameters'        => 'SystemParameters',
        'visibility'              => 'Visibility',
        'vpcName'                 => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toMap() : null;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpProtocol) {
            $res['HttpProtocol'] = $this->httpProtocol;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->originResultDescription) {
            $res['OriginResultDescription'] = $this->originResultDescription;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathParameters) {
            $res['PathParameters'] = null !== $this->pathParameters ? $this->pathParameters->toMap() : null;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->postBodyType) {
            $res['PostBodyType'] = $this->postBodyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toMap() : null;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = null !== $this->requestHeaders ? $this->requestHeaders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestQueries) {
            $res['RequestQueries'] = null !== $this->requestQueries ? $this->requestQueries->toMap() : null;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->serviceFCEnable) {
            $res['ServiceFCEnable'] = $this->serviceFCEnable;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toMap() : null;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = constantParameters::fromMap($map['ConstantParameters']);
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpProtocol'])) {
            $model->httpProtocol = $map['HttpProtocol'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['OriginResultDescription'])) {
            $model->originResultDescription = $map['OriginResultDescription'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathParameters'])) {
            $model->pathParameters = pathParameters::fromMap($map['PathParameters']);
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['PostBodyType'])) {
            $model->postBodyType = $map['PostBodyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = requestBody::fromMap($map['RequestBody']);
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = requestHeaders::fromMap($map['RequestHeaders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestQueries'])) {
            $model->requestQueries = requestQueries::fromMap($map['RequestQueries']);
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['ServiceFCEnable'])) {
            $model->serviceFCEnable = $map['ServiceFCEnable'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = systemParameters::fromMap($map['SystemParameters']);
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
