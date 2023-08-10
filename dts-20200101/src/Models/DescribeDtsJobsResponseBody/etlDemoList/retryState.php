<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;

use AlibabaCloud\Tea\Model;

class retryState extends Model
{
    /**
     * @description The error message returned if these retries failed.
     *
     * @example Unexpected error
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The task ID.
     *
     * @example bi6e22ay243****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The maximum duration of a retry. Unit: seconds.
     *
     * @example 7200
     *
     * @var int
     */
    public $maxRetryTime;

    /**
     * @description The progress of the instance when DTS retries.
     *
     * @example 03
     *
     * @var string
     */
    public $module;

    /**
     * @description The number of retries that have been performed.
     *
     * @example 5
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The object on which these retries are performed. Valid values:
     *
     * - **srcDB**: the source database
     * - **destDB**: the destination database
     * - **inner_module**: an internal module of DTS
     * @example srcDB
     *
     * @var string
     */
    public $retryTarget;

    /**
     * @description The time that has elapsed from the time when the first retry starts. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $retryTime;

    /**
     * @description Indicates whether the task is being retried. Valid values:
     *
     * - **true**
     * - **false**
     * @example false
     *
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
