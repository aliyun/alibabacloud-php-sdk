<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs;

use AlibabaCloud\Tea\Model;

class requestLog extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 4b83229ebcab4ecd88956fb3********
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API
     *
     * @example ApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $backendRequestEnd;

    /**
     * @var int
     */
    public $backendRequestStart;

    /**
     * @var int
     */
    public $backendResponseEnd;

    /**
     * @var int
     */
    public $backendResponseStart;

    /**
     * @description The IP address of the client that sends the request.
     *
     * @example 21.237.XXX.XXX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The X-Ca-Nonce header included in the request from the client.
     *
     * @example d43df9db-3b05-4cd6-888a-1c0b********
     *
     * @var string
     */
    public $clientNonce;

    /**
     * @description The ID of the application from which an API request is sent.
     *
     * @example 11096****
     *
     * @var string
     */
    public $consumerAppId;

    /**
     * @description The application key used by the caller.
     *
     * @example 20412****
     *
     * @var string
     */
    public $consumerAppKey;

    /**
     * @description The ID of the custom trace.
     *
     * @example 95657ED9-2F6F-426F-BD99-79C8********
     *
     * @var string
     */
    public $customTraceId;

    /**
     * @description The domain name of the request.
     *
     * @example 360bdd88695c48ae8085c7f2********-ap-southeast-1.alicloudapi.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The error code returned if the request failed.
     *
     * @example X500ER
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example Backend service connect failed `Timeout connecting to [/1XX.20.0.XX:8080]`
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The specific error message returned by the backend service.
     *
     * @example error msg
     *
     * @var string
     */
    public $exception;

    /**
     * @var int
     */
    public $frontRequestEnd;

    /**
     * @var int
     */
    public $frontRequestStart;

    /**
     * @var int
     */
    public $frontResponseEnd;

    /**
     * @var int
     */
    public $frontResponseStart;

    /**
     * @description The ID of the API group to which the API belongs.
     *
     * @example dc024277fe6c4cada79ba0bd6********
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group to which the API belongs.
     *
     * @example GroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The HTTP method used to send the request.
     *
     * @example POST
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The path of the request.
     *
     * @example /testPath
     *
     * @var string
     */
    public $httpPath;

    /**
     * @description The initial request ID when API Gateway calls an API. For example, if API-1 calls API-2, the initialRequestId parameter in the log of API-2 indicates the ID of the request from API-1.
     *
     * @example 95657ED9-2F6F-426F-BD99-79C8********
     *
     * @var string
     */
    public $initialRequestId;

    /**
     * @description The ID of the API Gateway instance to which the API belongs.
     *
     * @example apigateway-bj-ab2b********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The JSON web token (JWT) claims. The claims can be configured at the group level.
     *
     * @example {}
     *
     * @var string
     */
    public $jwtClaims;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The request body. A request body cannot exceed 1,024 bytes in size.
     *
     * @example param=paramName
     *
     * @var string
     */
    public $requestBody;

    /**
     * @description The request headers.
     *
     * @example content-type: application/x-www-form-urlencoded
     *
     * @var string
     */
    public $requestHeaders;

    /**
     * @description The ID of the request.
     *
     * @example 95657ED9-2F6F-426F-BD99-79C8********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The protocol used by the client to send the request. Valid values: HTTP, HTTPS, and WS.
     *
     * @example HTTP
     *
     * @var string
     */
    public $requestProtocol;

    /**
     * @description The query string for the request.
     *
     * @example username=name
     *
     * @var string
     */
    public $requestQueryString;

    /**
     * @description The size of the request. Unit: bytes.
     *
     * @example 1923
     *
     * @var string
     */
    public $requestSize;

    /**
     * @description The request time, in UTC.
     *
     * @example 2022-10-29T03:59:59Z
     *
     * @var string
     */
    public $requestTime;

    /**
     * @description The response body. A response body cannot exceed 1,024 bytes in size.
     *
     * @example param=paramName
     *
     * @var string
     */
    public $responseBody;

    /**
     * @description The headers in the API response.
     *
     * @example content-type: application/x-www-form-urlencoded
     *
     * @var string
     */
    public $responseHeaders;

    /**
     * @description The size of returned data. Unit: bytes.
     *
     * @example 23441
     *
     * @var string
     */
    public $responseSize;

    /**
     * @description The total time consumed to access backend resources. The total time includes the time consumed to request a connection to the resources, the time consumed to establish the connection, and the time consumed to call the backend service. Unit: milliseconds.
     *
     * @example 324
     *
     * @var string
     */
    public $serviceLatency;

    /**
     * @description The ID of the API environment.
     *
     * @example 8a305b7f10334052a52d9156********
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the API environment.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The total time consumed by the request. Unit: milliseconds.
     *
     * @example 1345
     *
     * @var string
     */
    public $totalLatency;

    /**
     * @description The list of plug-ins hit by the request and the relevant context.
     *
     * @example []
     *
     * @var string
     */
    public $plugin;
    protected $_name = [
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'appName'              => 'AppName',
        'backendRequestEnd'    => 'BackendRequestEnd',
        'backendRequestStart'  => 'BackendRequestStart',
        'backendResponseEnd'   => 'BackendResponseEnd',
        'backendResponseStart' => 'BackendResponseStart',
        'clientIp'             => 'ClientIp',
        'clientNonce'          => 'ClientNonce',
        'consumerAppId'        => 'ConsumerAppId',
        'consumerAppKey'       => 'ConsumerAppKey',
        'customTraceId'        => 'CustomTraceId',
        'domain'               => 'Domain',
        'errorCode'            => 'ErrorCode',
        'errorMessage'         => 'ErrorMessage',
        'exception'            => 'Exception',
        'frontRequestEnd'      => 'FrontRequestEnd',
        'frontRequestStart'    => 'FrontRequestStart',
        'frontResponseEnd'     => 'FrontResponseEnd',
        'frontResponseStart'   => 'FrontResponseStart',
        'groupId'              => 'GroupId',
        'groupName'            => 'GroupName',
        'httpMethod'           => 'HttpMethod',
        'httpPath'             => 'HttpPath',
        'initialRequestId'     => 'InitialRequestId',
        'instanceId'           => 'InstanceId',
        'jwtClaims'            => 'JwtClaims',
        'region'               => 'Region',
        'requestBody'          => 'RequestBody',
        'requestHeaders'       => 'RequestHeaders',
        'requestId'            => 'RequestId',
        'requestProtocol'      => 'RequestProtocol',
        'requestQueryString'   => 'RequestQueryString',
        'requestSize'          => 'RequestSize',
        'requestTime'          => 'RequestTime',
        'responseBody'         => 'ResponseBody',
        'responseHeaders'      => 'ResponseHeaders',
        'responseSize'         => 'ResponseSize',
        'serviceLatency'       => 'ServiceLatency',
        'stageId'              => 'StageId',
        'stageName'            => 'StageName',
        'statusCode'           => 'StatusCode',
        'totalLatency'         => 'TotalLatency',
        'plugin'               => 'plugin',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->backendRequestEnd) {
            $res['BackendRequestEnd'] = $this->backendRequestEnd;
        }
        if (null !== $this->backendRequestStart) {
            $res['BackendRequestStart'] = $this->backendRequestStart;
        }
        if (null !== $this->backendResponseEnd) {
            $res['BackendResponseEnd'] = $this->backendResponseEnd;
        }
        if (null !== $this->backendResponseStart) {
            $res['BackendResponseStart'] = $this->backendResponseStart;
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
        if (null !== $this->frontRequestEnd) {
            $res['FrontRequestEnd'] = $this->frontRequestEnd;
        }
        if (null !== $this->frontRequestStart) {
            $res['FrontRequestStart'] = $this->frontRequestStart;
        }
        if (null !== $this->frontResponseEnd) {
            $res['FrontResponseEnd'] = $this->frontResponseEnd;
        }
        if (null !== $this->frontResponseStart) {
            $res['FrontResponseStart'] = $this->frontResponseStart;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BackendRequestEnd'])) {
            $model->backendRequestEnd = $map['BackendRequestEnd'];
        }
        if (isset($map['BackendRequestStart'])) {
            $model->backendRequestStart = $map['BackendRequestStart'];
        }
        if (isset($map['BackendResponseEnd'])) {
            $model->backendResponseEnd = $map['BackendResponseEnd'];
        }
        if (isset($map['BackendResponseStart'])) {
            $model->backendResponseStart = $map['BackendResponseStart'];
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
        if (isset($map['FrontRequestEnd'])) {
            $model->frontRequestEnd = $map['FrontRequestEnd'];
        }
        if (isset($map['FrontRequestStart'])) {
            $model->frontRequestStart = $map['FrontRequestStart'];
        }
        if (isset($map['FrontResponseEnd'])) {
            $model->frontResponseEnd = $map['FrontResponseEnd'];
        }
        if (isset($map['FrontResponseStart'])) {
            $model->frontResponseStart = $map['FrontResponseStart'];
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
