<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastByFileUrlJobResponseBody;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastByFileUrlJobResponseBody\data\response;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example True
     *
     * @var bool
     */
    public $completed;

    /**
     * @example 2024-12-22 00:00:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ""
     *
     * @var string
     */
    public $error;

    /**
     * @example 8c0ca18a-246a-4acd-80ca-e16d8ff5ef33
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
     * @var response
     */
    public $response;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'completed' => 'Completed',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'jobId' => 'JobId',
        'progress' => 'Progress',
        'response' => 'Response',
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
            $model->response = response::fromMap($map['Response']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
