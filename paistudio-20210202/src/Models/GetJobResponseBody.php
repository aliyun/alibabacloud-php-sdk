<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetJobResponseBody extends Model
{
    /**
     * @example ---
     * odpsProject: "xxxxxxx"
     * @var string
     */
    public $arguments;

    /**
     * @example 13266*******76250
     *
     * @var string
     */
    public $creator;

    /**
     * @example EXECUTE_TO_HERE
     *
     * @var string
     */
    public $executeType;

    /**
     * @example draft-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example job-6xfhrofqx93y139fg3
     *
     * @var string
     */
    public $jobId;

    /**
     * @example id-xxxxx
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example node-5dzotrnwyzfxmbwwc8
     *
     * @var string
     */
    public $paiflowNodeId;

    /**
     * @example 18D5A1C6-14B8-545E-8408-0A7DDB4C6B5E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example flow-lcs8ez11961l6urc3m
     *
     * @var string
     */
    public $runId;

    /**
     * @example apiVersion: "core/v1"
     * annotations: {}
     * @var string
     */
    public $runInfo;

    /**
     * @example {}
     *
     * @var string
     */
    public $snapshot;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example 86995
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'arguments'     => 'Arguments',
        'creator'       => 'Creator',
        'executeType'   => 'ExecuteType',
        'experimentId'  => 'ExperimentId',
        'gmtCreateTime' => 'GmtCreateTime',
        'jobId'         => 'JobId',
        'nodeId'        => 'NodeId',
        'paiflowNodeId' => 'PaiflowNodeId',
        'requestId'     => 'RequestId',
        'runId'         => 'RunId',
        'runInfo'       => 'RunInfo',
        'snapshot'      => 'Snapshot',
        'status'        => 'Status',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetJobResponseBody
     */
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
