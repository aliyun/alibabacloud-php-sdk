<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentStatusResponseBody;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $runNodeId;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'finishedAt' => 'FinishedAt',
        'jobId' => 'JobId',
        'nodeId' => 'NodeId',
        'runId' => 'RunId',
        'runNodeId' => 'RunNodeId',
        'startedAt' => 'StartedAt',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->runNodeId) {
            $res['RunNodeId'] = $this->runNodeId;
        }

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
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
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['RunNodeId'])) {
            $model->runNodeId = $map['RunNodeId'];
        }

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
