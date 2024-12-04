<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @example 17677*******89598
     *
     * @var string
     */
    public $creator;

    /**
     * @example EXECUTE_ALL
     *
     * @var string
     */
    public $executeType;

    /**
     * @example draft-4x4iv3a9enuxw4vgka
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
     * @example job-mewqhd72nsrqujn1px
     *
     * @var string
     */
    public $jobId;

    /**
     * @example nodeId1
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example node-xdfasf8ewxfdaddl
     *
     * @var string
     */
    public $paiflowNodeId;

    /**
     * @example flow-aayfouai80i980ncvz
     *
     * @var string
     */
    public $runId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 94436
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'creator'       => 'Creator',
        'executeType'   => 'ExecuteType',
        'experimentId'  => 'ExperimentId',
        'gmtCreateTime' => 'GmtCreateTime',
        'jobId'         => 'JobId',
        'nodeId'        => 'NodeId',
        'paiflowNodeId' => 'PaiflowNodeId',
        'runId'         => 'RunId',
        'status'        => 'Status',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
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
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
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
