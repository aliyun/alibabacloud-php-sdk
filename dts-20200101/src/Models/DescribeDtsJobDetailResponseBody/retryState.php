<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class retryState extends Model
{
    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $maxRetryTime;

    /**
     * @var string
     */
    public $module;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $retryTarget;

    /**
     * @var int
     */
    public $retryTime;

    /**
     * @var bool
     */
    public $retrying;
    protected $_name = [
        'errMessage'   => 'ErrMessage',
        'jobId'        => 'JobId',
        'maxRetryTime' => 'MaxRetryTime',
        'module'       => 'Module',
        'retryCount'   => 'RetryCount',
        'retryTarget'  => 'RetryTarget',
        'retryTime'    => 'RetryTime',
        'retrying'     => 'Retrying',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->maxRetryTime) {
            $res['MaxRetryTime'] = $this->maxRetryTime;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryTarget) {
            $res['RetryTarget'] = $this->retryTarget;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }
        if (null !== $this->retrying) {
            $res['Retrying'] = $this->retrying;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MaxRetryTime'])) {
            $model->maxRetryTime = $map['MaxRetryTime'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryTarget'])) {
            $model->retryTarget = $map['RetryTarget'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }
        if (isset($map['Retrying'])) {
            $model->retrying = $map['Retrying'];
        }

        return $model;
    }
}
