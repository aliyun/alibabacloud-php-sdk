<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoResponseBody\jobOutputList;

use AlibabaCloud\Tea\Model;

class clusterStatJobOutput extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var int
     */
    public $bytesOutput;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $applicationId;
    protected $_name = [
        'startTime'     => 'StartTime',
        'finishTime'    => 'FinishTime',
        'state'         => 'State',
        'jobId'         => 'JobId',
        'user'          => 'User',
        'queue'         => 'Queue',
        'bytesOutput'   => 'BytesOutput',
        'name'          => 'Name',
        'applicationId' => 'ApplicationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->bytesOutput) {
            $res['BytesOutput'] = $this->bytesOutput;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatJobOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['BytesOutput'])) {
            $model->bytesOutput = $map['BytesOutput'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
