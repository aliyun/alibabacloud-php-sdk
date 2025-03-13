<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobHistorysResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $executeNumber;

    /**
     * @example 10_xaxxsxa
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 123
     *
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @example ssaasssa
     *
     * @var string
     */
    public $operatorAccountId;

    /**
     * @example 123
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @example 123
     *
     * @var int
     */
    public $pipelineRunId;

    /**
     * @example {}
     *
     * @var string
     */
    public $sources;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'executeNumber'     => 'executeNumber',
        'identifier'        => 'identifier',
        'jobId'             => 'jobId',
        'jobName'           => 'jobName',
        'operatorAccountId' => 'operatorAccountId',
        'pipelineId'        => 'pipelineId',
        'pipelineRunId'     => 'pipelineRunId',
        'sources'           => 'sources',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeNumber) {
            $res['executeNumber'] = $this->executeNumber;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }
        if (null !== $this->operatorAccountId) {
            $res['operatorAccountId'] = $this->operatorAccountId;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineRunId) {
            $res['pipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->sources) {
            $res['sources'] = $this->sources;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['executeNumber'])) {
            $model->executeNumber = $map['executeNumber'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }
        if (isset($map['operatorAccountId'])) {
            $model->operatorAccountId = $map['operatorAccountId'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineRunId'])) {
            $model->pipelineRunId = $map['pipelineRunId'];
        }
        if (isset($map['sources'])) {
            $model->sources = $map['sources'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
