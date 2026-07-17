<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class GetComputeEngineJobDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var mixed[]
     */
    public $configs;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $lastErrorCode;

    /**
     * @var string
     */
    public $lastErrorInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'configs' => 'Configs',
        'createTime' => 'CreateTime',
        'endpoint' => 'Endpoint',
        'extraInfo' => 'ExtraInfo',
        'finishTime' => 'FinishTime',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobType' => 'JobType',
        'lastErrorCode' => 'LastErrorCode',
        'lastErrorInfo' => 'LastErrorInfo',
        'requestId' => 'RequestId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                foreach ($this->configs as $key1 => $value1) {
                    $res['Configs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->lastErrorCode) {
            $res['LastErrorCode'] = $this->lastErrorCode;
        }

        if (null !== $this->lastErrorInfo) {
            $res['LastErrorInfo'] = $this->lastErrorInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                foreach ($map['Configs'] as $key1 => $value1) {
                    $model->configs[$key1] = $value1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['LastErrorCode'])) {
            $model->lastErrorCode = $map['LastErrorCode'];
        }

        if (isset($map['LastErrorInfo'])) {
            $model->lastErrorInfo = $map['LastErrorInfo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
