<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs;

use AlibabaCloud\Tea\Model;

class requestLog extends Model
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
     * @var int
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientNonce;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var string
     */
    public $consumerAppKey;

    /**
     * @var string
     */
    public $customTraceId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $exception;

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
    public $httpMethod;

    /**
     * @var string
     */
    public $httpPath;

    /**
     * @var string
     */
    public $initialRequestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jwtClaims;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestBody;

    /**
     * @var string
     */
    public $requestHeaders;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestProtocol;

    /**
     * @var string
     */
    public $requestQueryString;

    /**
     * @var string
     */
    public $requestSize;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $responseBody;

    /**
     * @var string
     */
    public $responseHeaders;

    /**
     * @var string
     */
    public $responseSize;

    /**
     * @var string
     */
    public $serviceLatency;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $totalLatency;

    /**
     * @var string
     */
    public $plugin;
    protected $_name = [
        'apiId'              => 'ApiId',
        'apiName'            => 'ApiName',
        'clientIp'           => 'ClientIp',
        'clientNonce'        => 'ClientNonce',
        'consumerAppId'      => 'ConsumerAppId',
        'consumerAppKey'     => 'ConsumerAppKey',
        'customTraceId'      => 'CustomTraceId',
        'domain'             => 'Domain',
        'errorCode'          => 'ErrorCode',
        'errorMessage'       => 'ErrorMessage',
        'exception'          => 'Exception',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'httpMethod'         => 'HttpMethod',
        'httpPath'           => 'HttpPath',
        'initialRequestId'   => 'InitialRequestId',
        'instanceId'         => 'InstanceId',
        'jwtClaims'          => 'JwtClaims',
        'region'             => 'Region',
        'requestBody'        => 'RequestBody',
        'requestHeaders'     => 'RequestHeaders',
        'requestId'          => 'RequestId',
        'requestProtocol'    => 'RequestProtocol',
        'requestQueryString' => 'RequestQueryString',
        'requestSize'        => 'RequestSize',
        'requestTime'        => 'RequestTime',
        'responseBody'       => 'ResponseBody',
        'responseHeaders'    => 'ResponseHeaders',
        'responseSize'       => 'ResponseSize',
        'serviceLatency'     => 'ServiceLatency',
        'stageId'            => 'StageId',
        'stageName'          => 'StageName',
        'statusCode'         => 'StatusCode',
        'totalLatency'       => 'TotalLatency',
        'plugin'             => 'plugin',
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
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientNonce) {
            $res['ClientNonce'] = $this->clientNonce;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->consumerAppKey) {
            $res['ConsumerAppKey'] = $this->consumerAppKey;
        }
        if (null !== $this->customTraceId) {
            $res['CustomTraceId'] = $this->customTraceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpPath) {
            $res['HttpPath'] = $this->httpPath;
        }
        if (null !== $this->initialRequestId) {
            $res['InitialRequestId'] = $this->initialRequestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jwtClaims) {
            $res['JwtClaims'] = $this->jwtClaims;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = $this->requestBody;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }
        if (null !== $this->requestQueryString) {
            $res['RequestQueryString'] = $this->requestQueryString;
        }
        if (null !== $this->requestSize) {
            $res['RequestSize'] = $this->requestSize;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->responseBody) {
            $res['ResponseBody'] = $this->responseBody;
        }
        if (null !== $this->responseHeaders) {
            $res['ResponseHeaders'] = $this->responseHeaders;
        }
        if (null !== $this->responseSize) {
            $res['ResponseSize'] = $this->responseSize;
        }
        if (null !== $this->serviceLatency) {
            $res['ServiceLatency'] = $this->serviceLatency;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->totalLatency) {
            $res['TotalLatency'] = $this->totalLatency;
        }
        if (null !== $this->plugin) {
            $res['plugin'] = $this->plugin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestLog
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientNonce'])) {
            $model->clientNonce = $map['ClientNonce'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['ConsumerAppKey'])) {
            $model->consumerAppKey = $map['ConsumerAppKey'];
        }
        if (isset($map['CustomTraceId'])) {
            $model->customTraceId = $map['CustomTraceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpPath'])) {
            $model->httpPath = $map['HttpPath'];
        }
        if (isset($map['InitialRequestId'])) {
            $model->initialRequestId = $map['InitialRequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JwtClaims'])) {
            $model->jwtClaims = $map['JwtClaims'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = $map['RequestBody'];
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = $map['RequestHeaders'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }
        if (isset($map['RequestQueryString'])) {
            $model->requestQueryString = $map['RequestQueryString'];
        }
        if (isset($map['RequestSize'])) {
            $model->requestSize = $map['RequestSize'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['ResponseBody'])) {
            $model->responseBody = $map['ResponseBody'];
        }
        if (isset($map['ResponseHeaders'])) {
            $model->responseHeaders = $map['ResponseHeaders'];
        }
        if (isset($map['ResponseSize'])) {
            $model->responseSize = $map['ResponseSize'];
        }
        if (isset($map['ServiceLatency'])) {
            $model->serviceLatency = $map['ServiceLatency'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TotalLatency'])) {
            $model->totalLatency = $map['TotalLatency'];
        }
        if (isset($map['plugin'])) {
            $model->plugin = $map['plugin'];
        }

        return $model;
    }
}
