<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetAivppAlgoJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetAivppAlgoJobResponseBody\data\response;

class data extends Model
{
    /**
     * @var bool
     */
    public $completed;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $error;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var response
     */
    public $response;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'completed'  => 'Completed',
        'createTime' => 'CreateTime',
        'error'      => 'Error',
        'jobId'      => 'JobId',
        'progress'   => 'Progress',
        'response'   => 'Response',
        'status'     => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
