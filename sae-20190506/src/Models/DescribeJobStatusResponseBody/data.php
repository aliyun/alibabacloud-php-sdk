<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of running instances.
     *
     * @example 0
     *
     * @var int
     */
    public $active;

    /**
     * @description The time when the job was executed.
     *
     * @example 1657522839
     *
     * @var int
     */
    public $completionTime;

    /**
     * @description The number of instances that failed to run.
     *
     * @example 0
     *
     * @var int
     */
    public $failed;

    /**
     * @description The job ID.
     *
     * @example event-b798157b-40a2-4388-b578-71fb897103**-**
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The returned message. Take note of the following rules:
     *
     *   If the call is successful, **success** is returned.
     *   If the call fails, an error code is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the job was created.
     *
     * @example 1657522800
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the job. Valid values:
     *
     *   **0**: The job is not executed.
     *   **1**: The job was executed.
     *   **2**: The job failed to be executed.
     *   **3**: The job is being executed.
     *
     * @example 1
     *
     * @var string
     */
    public $state;

    /**
     * @description The number of instances that are successfully run.
     *
     * @example 3
     *
     * @var int
     */
    public $succeeded;
    protected $_name = [
        'active'         => 'Active',
        'completionTime' => 'CompletionTime',
        'failed'         => 'Failed',
        'jobId'          => 'JobId',
        'message'        => 'Message',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'succeeded'      => 'Succeeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}
