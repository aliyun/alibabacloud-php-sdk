<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\RestoreInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description Indicates whether the task is complete.
     *
     * @example true
     *
     * @var bool
     */
    public $completed;

    /**
     * @description The time when the task is created. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1711764127000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message returned if the task fails.
     *
     * @example OperationTimeout
     *
     * @var string
     */
    public $error;

    /**
     * @description The ID of the task.
     *
     * @example job-540356379023708160
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The progress of the task. Unit: percent (%).
     *
     * @example 50
     *
     * @var int
     */
    public $progress;

    /**
     * @description The response returned after the task succeeds.
     *
     * @example success
     *
     * @var string
     */
    public $response;

    /**
     * @description The task status.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The operation type. Valid values:
     *
     *   create
     *   cancel
     *
     * @example create
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'completed' => 'Completed',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'jobId' => 'JobId',
        'progress' => 'Progress',
        'response' => 'Response',
        'status' => 'Status',
        'type' => 'Type',
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
