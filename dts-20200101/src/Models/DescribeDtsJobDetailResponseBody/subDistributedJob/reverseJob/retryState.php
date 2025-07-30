<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob\reverseJob;

use AlibabaCloud\Tea\Model;

class retryState extends Model
{
    /**
     * @description The error message returned.
     *
     * @example CHECK__ERROR_SAME_OBJ
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The task ID.
     *
     * @example ta7w132u12h****
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
     * @description The progress of the instance when DTS performs retries.
     *
     * @example 03
     *
     * @var string
     */
    public $module;

    /**
     * @description The number of retries.
     *
     * @example 5
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The object on which the retries are performed. Valid values:
     *
     *   **srcDB**: the source database.
     *   **destDB**: the destination database.
     *   **inner_module**: an internal module of DTS.
     *
     * @example srcDB
     *
     * @var string
     */
    public $retryTarget;

    /**
     * @description The time that has elapsed from the point in time when the first retry starts. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $retryTime;

    /**
     * @description Indicates whether the task is being retried. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $retrying;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'jobId' => 'JobId',
        'maxRetryTime' => 'MaxRetryTime',
        'module' => 'Module',
        'retryCount' => 'RetryCount',
        'retryTarget' => 'RetryTarget',
        'retryTime' => 'RetryTime',
        'retrying' => 'Retrying',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
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
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
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
