<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentStatusResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 2021-01-21T18:12:35.232Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example job-mewqhd72nsrqujn1px
     *
     * @var string
     */
    public $jobId;

    /**
     * @example id-2317-1608984201281-74996
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example flow-wayrh3k605s7i51wey
     *
     * @var string
     */
    public $runId;

    /**
     * @example node-6hc0eocnmzf4pk9njc
     *
     * @var string
     */
    public $runNodeId;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'finishedAt' => 'FinishedAt',
        'jobId'      => 'JobId',
        'nodeId'     => 'NodeId',
        'runId'      => 'RunId',
        'runNodeId'  => 'RunNodeId',
        'startedAt'  => 'StartedAt',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nodes
     */
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
