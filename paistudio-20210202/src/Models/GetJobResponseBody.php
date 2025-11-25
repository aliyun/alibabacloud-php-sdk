<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $executeType;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $gmtCreateTime;

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
    public $paiflowNodeId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $runInfo;

    /**
     * @var string
     */
    public $snapshot;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'arguments' => 'Arguments',
        'creator' => 'Creator',
        'executeType' => 'ExecuteType',
        'experimentId' => 'ExperimentId',
        'gmtCreateTime' => 'GmtCreateTime',
        'jobId' => 'JobId',
        'nodeId' => 'NodeId',
        'paiflowNodeId' => 'PaiflowNodeId',
        'requestId' => 'RequestId',
        'runId' => 'RunId',
        'runInfo' => 'RunInfo',
        'snapshot' => 'Snapshot',
        'status' => 'Status',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->executeType) {
            $res['ExecuteType'] = $this->executeType;
        }

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->paiflowNodeId) {
            $res['PaiflowNodeId'] = $this->paiflowNodeId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->runInfo) {
            $res['RunInfo'] = $this->runInfo;
        }

        if (null !== $this->snapshot) {
            $res['Snapshot'] = $this->snapshot;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['ExecuteType'])) {
            $model->executeType = $map['ExecuteType'];
        }

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PaiflowNodeId'])) {
            $model->paiflowNodeId = $map['PaiflowNodeId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['RunInfo'])) {
            $model->runInfo = $map['RunInfo'];
        }

        if (isset($map['Snapshot'])) {
            $model->snapshot = $map['Snapshot'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
