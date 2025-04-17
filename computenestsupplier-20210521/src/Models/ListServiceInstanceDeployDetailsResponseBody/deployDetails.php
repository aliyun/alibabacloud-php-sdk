<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class deployDetails extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cycle;

    /**
     * @var string
     */
    public $deploySucceeded;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $serviceNameChn;

    /**
     * @var string
     */
    public $serviceNameEng;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'count' => 'Count',
        'createTime' => 'CreateTime',
        'cycle' => 'Cycle',
        'deploySucceeded' => 'DeploySucceeded',
        'errorCode' => 'ErrorCode',
        'errorDetail' => 'ErrorDetail',
        'errorType' => 'ErrorType',
        'serviceId' => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceNameChn' => 'ServiceNameChn',
        'serviceNameEng' => 'ServiceNameEng',
        'serviceType' => 'ServiceType',
        'serviceVersion' => 'ServiceVersion',
        'timestamp' => 'Timestamp',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
