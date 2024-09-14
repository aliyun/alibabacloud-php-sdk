<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class CopyImageResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $completed;

    /**
     * @example 1724379766191
     *
     * @var string
     */
    public $createTime;

    /**
     * @example OperationTimeout
     *
     * @var string
     */
    public $error;

    /**
     * @example job-202401250936hze747fd7e0007005
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example 4C467B38-3910-447D-87BC-AC049166F216
     *
     * @var string
     */
    public $requestId;

    /**
     * @example success
     *
     * @var string
     */
    public $response;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example create
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'completed'  => 'Completed',
        'createTime' => 'CreateTime',
        'error'      => 'Error',
        'jobId'      => 'JobId',
        'progress'   => 'Progress',
        'requestId'  => 'RequestId',
        'response'   => 'Response',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return CopyImageResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
