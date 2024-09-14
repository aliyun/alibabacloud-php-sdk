<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\ExportImageResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $completed;

    /**
     * @example Job.Canceled
     *
     * @var string
     */
    public $error;

    /**
     * @example b1748ca6-6b55-49f4-a6d4-2d694a9f3693
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 100
     *
     * @var int
     */
    public $process;

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
        'completed' => 'Completed',
        'error'     => 'Error',
        'jobId'     => 'JobId',
        'process'   => 'Process',
        'response'  => 'Response',
        'status'    => 'Status',
        'type'      => 'Type',
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
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
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
