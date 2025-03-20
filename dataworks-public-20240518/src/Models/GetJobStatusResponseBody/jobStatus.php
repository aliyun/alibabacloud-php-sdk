<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class jobStatus extends Model
{
    /**
     * @description Indicates whether the asynchronous task is complete. Valid values: True False
     *
     * @example False
     *
     * @var string
     */
    public $completed;

    /**
     * @description The time when the asynchronous task was created.
     *
     * @example 1729063449802
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message returned if the asynchronous task fails.
     *
     * @example Not Found
     *
     * @var string
     */
    public $error;

    /**
     * @description The ID of the asynchronous task.
     *
     * @example C664CDE3-9C0B-5792-B17F-6C543783BBBC
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The type of the asynchronous task. Valid values:
     *
     *   **Create**: The asynchronous task is used to create an object.
     *   **Update**: The asynchronous task is used to update an object.
     *   **Cancel**: The asynchronous task is used to cancel an operation.
     *
     * @example Create
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The status of the asynchronous task. Valid values:
     *
     *   **Success**
     *   **Fail**
     *   **Cancel**
     *   **Running**
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'completed' => 'Completed',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
