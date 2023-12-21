<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example true
     *
     * @var bool
     */
    public $inputArtifactArchived;

    /**
     * @example node-hynm2bv8wqhp5esfx1
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example dataSource
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example true
     *
     * @var bool
     */
    public $outputArtifactArchived;

    /**
     * @example flow-hynm2bv8wqhp5esfxq
     *
     * @var string
     */
    public $pipelineRunId;

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
        'finishedAt'             => 'FinishedAt',
        'inputArtifactArchived'  => 'InputArtifactArchived',
        'nodeId'                 => 'NodeId',
        'nodeName'               => 'NodeName',
        'outputArtifactArchived' => 'OutputArtifactArchived',
        'pipelineRunId'          => 'PipelineRunId',
        'startedAt'              => 'StartedAt',
        'status'                 => 'Status',
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
        if (null !== $this->inputArtifactArchived) {
            $res['InputArtifactArchived'] = $this->inputArtifactArchived;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->outputArtifactArchived) {
            $res['OutputArtifactArchived'] = $this->outputArtifactArchived;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
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
        if (isset($map['InputArtifactArchived'])) {
            $model->inputArtifactArchived = $map['InputArtifactArchived'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OutputArtifactArchived'])) {
            $model->outputArtifactArchived = $map['OutputArtifactArchived'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
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
