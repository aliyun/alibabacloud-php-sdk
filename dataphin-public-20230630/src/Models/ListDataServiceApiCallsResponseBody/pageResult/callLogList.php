<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class callLogList extends Model
{
    /**
     * @example 102112
     *
     * @var int
     */
    public $apiId;

    /**
     * @example test
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 201211
     *
     * @var int
     */
    public $appKey;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example OK
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example OK
     *
     * @var string
     */
    public $bizCodeDescription;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example 2000
     *
     * @var int
     */
    public $costTime;

    /**
     * @example 2024-11-01 01:01:03.000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $env;

    /**
     * @example 1000
     *
     * @var int
     */
    public $executeCostTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $executeMode;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @example OK
     *
     * @var string
     */
    public $httpStatusDescription;

    /**
     * @example 102356
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 102356
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 1234567890-232sds-3e232-ae2e232
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {"name":"test"}
     *
     * @var string
     */
    public $requestParameter;

    /**
     * @example 1024
     *
     * @var int
     */
    public $requestSize;

    /**
     * @example {"code":"200","message":"success"}
     *
     * @var string
     */
    public $responseParameter;

    /**
     * @example 1024
     *
     * @var int
     */
    public $responseSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $resultCount;

    /**
     * @example select col1 from t_test1 limit 100;
     *
     * @var string
     */
    public $sql;

    /**
     * @example 2024-11-01 01:01:01.000
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $successful;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'bizCode' => 'BizCode',
        'bizCodeDescription' => 'BizCodeDescription',
        'clientIp' => 'ClientIp',
        'costTime' => 'CostTime',
        'endTime' => 'EndTime',
        'env' => 'Env',
        'executeCostTime' => 'ExecuteCostTime',
        'executeMode' => 'ExecuteMode',
        'httpStatusCode' => 'HttpStatusCode',
        'httpStatusDescription' => 'HttpStatusDescription',
        'jobId' => 'JobId',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'requestParameter' => 'RequestParameter',
        'requestSize' => 'RequestSize',
        'responseParameter' => 'ResponseParameter',
        'responseSize' => 'ResponseSize',
        'resultCount' => 'ResultCount',
        'sql' => 'Sql',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'successful' => 'Successful',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->bizCodeDescription) {
            $res['BizCodeDescription'] = $this->bizCodeDescription;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->executeCostTime) {
            $res['ExecuteCostTime'] = $this->executeCostTime;
        }
        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->httpStatusDescription) {
            $res['HttpStatusDescription'] = $this->httpStatusDescription;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestParameter) {
            $res['RequestParameter'] = $this->requestParameter;
        }
        if (null !== $this->requestSize) {
            $res['RequestSize'] = $this->requestSize;
        }
        if (null !== $this->responseParameter) {
            $res['ResponseParameter'] = $this->responseParameter;
        }
        if (null !== $this->responseSize) {
            $res['ResponseSize'] = $this->responseSize;
        }
        if (null !== $this->resultCount) {
            $res['ResultCount'] = $this->resultCount;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callLogList
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BizCodeDescription'])) {
            $model->bizCodeDescription = $map['BizCodeDescription'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['ExecuteCostTime'])) {
            $model->executeCostTime = $map['ExecuteCostTime'];
        }
        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['HttpStatusDescription'])) {
            $model->httpStatusDescription = $map['HttpStatusDescription'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestParameter'])) {
            $model->requestParameter = $map['RequestParameter'];
        }
        if (isset($map['RequestSize'])) {
            $model->requestSize = $map['RequestSize'];
        }
        if (isset($map['ResponseParameter'])) {
            $model->responseParameter = $map['ResponseParameter'];
        }
        if (isset($map['ResponseSize'])) {
            $model->responseSize = $map['ResponseSize'];
        }
        if (isset($map['ResultCount'])) {
            $model->resultCount = $map['ResultCount'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }

        return $model;
    }
}
