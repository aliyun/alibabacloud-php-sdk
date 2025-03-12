<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class deployDetails extends Model
{
    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 4
     *
     * @var string
     */
    public $count;

    /**
     * @description The time when the service instance was created.
     *
     * @example 2024-04-10T01:58:20Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The period over which data is aggregated.
     *
     * @example Month
     *
     * @var string
     */
    public $cycle;

    /**
     * @description The indicates whether the deployment was successful.
     *
     * @example False
     *
     * @var string
     */
    public $deploySucceeded;

    /**
     * @description The error code.
     *
     * @example StackValidationFailed
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error description.
     *
     * @example {code: StackValidationFailed, message: \\"Failed to continue create ROS stack 89e724e2-84e6-4517-a372-30a545ab4145: Resource [LinuxInstanceRunCommand]: i-wz91nfbh1fxtmfb0try4 are not running. Command invocation only support running instances. ErrorCode: StackValidationFailed\\", requestId: null}
     *
     * @var string
     */
    public $errorDetail;

    /**
     * @description The type of error that caused the deployment to fail.
     *
     * @example ValidationError
     *
     * @var string
     */
    public $errorType;

    /**
     * @description The service ID.
     *
     * @example service-c751ed91f2074af39779
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service instance ID.
     *
     * @example si-273e8cee11d349e1803c
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The name of the service in Chinese.
     *
     * @example 测试服务(Test Service)
     *
     * @var string
     */
    public $serviceNameChn;

    /**
     * @description The name of the service in English.
     *
     * @example Test Service
     *
     * @var string
     */
    public $serviceNameEng;

    /**
     * @description The type of service.
     *
     * - operation: Managed operation service.
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The service version.
     *
     * @example 42
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The timestamp when the response is returned.
     *
     * @example 1723946641994
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The aliuid of user.
     *
     * @example 1591457835436382
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'count'             => 'Count',
        'createTime'        => 'CreateTime',
        'cycle'             => 'Cycle',
        'deploySucceeded'   => 'DeploySucceeded',
        'errorCode'         => 'ErrorCode',
        'errorDetail'       => 'ErrorDetail',
        'errorType'         => 'ErrorType',
        'serviceId'         => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceNameChn'    => 'ServiceNameChn',
        'serviceNameEng'    => 'ServiceNameEng',
        'serviceType'       => 'ServiceType',
        'serviceVersion'    => 'ServiceVersion',
        'timestamp'         => 'Timestamp',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->deploySucceeded) {
            $res['DeploySucceeded'] = $this->deploySucceeded;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceNameChn) {
            $res['ServiceNameChn'] = $this->serviceNameChn;
        }
        if (null !== $this->serviceNameEng) {
            $res['ServiceNameEng'] = $this->serviceNameEng;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DeploySucceeded'])) {
            $model->deploySucceeded = $map['DeploySucceeded'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceNameChn'])) {
            $model->serviceNameChn = $map['ServiceNameChn'];
        }
        if (isset($map['ServiceNameEng'])) {
            $model->serviceNameEng = $map['ServiceNameEng'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
