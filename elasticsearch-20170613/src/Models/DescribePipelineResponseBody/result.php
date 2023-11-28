<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the pipeline was created.
     *
     * @example 50
     *
     * @var int
     */
    public $batchDelay;

    /**
     * @example 125
     *
     * @var int
     */
    public $batchSize;

    /**
     * @description The description of the pipeline.
     *
     * @example input {  }  filter {  }  output {  }
     *
     * @var string
     */
    public $config;

    /**
     * @description The state of the MPS queue. Valid values:
     *
     *   NOT_DEPLOYED: The node is not deployed.
     *   RUNNING
     *   DELETED: Deleted. The console does not display this status.
     *
     * @example this is a test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @description The total capacity of the queue in bytes. Unit: MB.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @description Number of queue checkpoint writes.
     *
     * @example pipeline_test
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $pipelineStatus;

    /**
     * @description Pipeline batch delay. Unit: milliseconds.
     *
     * @example 1024
     *
     * @var int
     */
    public $queueCheckPointWrites;

    /**
     * @description The number of pipeline workers.
     *
     * @example 1024
     *
     * @var int
     */
    public $queueMaxBytes;

    /**
     * @description The specific configuration of the pipeline.
     *
     * @example MEMORY
     *
     * @var string
     */
    public $queueType;

    /**
     * @description The size of the pipeline batch.
     *
     * @example 2
     *
     * @var int
     */
    public $workers;
    protected $_name = [
        'batchDelay'            => 'batchDelay',
        'batchSize'             => 'batchSize',
        'config'                => 'config',
        'description'           => 'description',
        'gmtCreatedTime'        => 'gmtCreatedTime',
        'gmtUpdateTime'         => 'gmtUpdateTime',
        'pipelineId'            => 'pipelineId',
        'pipelineStatus'        => 'pipelineStatus',
        'queueCheckPointWrites' => 'queueCheckPointWrites',
        'queueMaxBytes'         => 'queueMaxBytes',
        'queueType'             => 'queueType',
        'workers'               => 'workers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchDelay) {
            $res['batchDelay'] = $this->batchDelay;
        }
        if (null !== $this->batchSize) {
            $res['batchSize'] = $this->batchSize;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineStatus) {
            $res['pipelineStatus'] = $this->pipelineStatus;
        }
        if (null !== $this->queueCheckPointWrites) {
            $res['queueCheckPointWrites'] = $this->queueCheckPointWrites;
        }
        if (null !== $this->queueMaxBytes) {
            $res['queueMaxBytes'] = $this->queueMaxBytes;
        }
        if (null !== $this->queueType) {
            $res['queueType'] = $this->queueType;
        }
        if (null !== $this->workers) {
            $res['workers'] = $this->workers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchDelay'])) {
            $model->batchDelay = $map['batchDelay'];
        }
        if (isset($map['batchSize'])) {
            $model->batchSize = $map['batchSize'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineStatus'])) {
            $model->pipelineStatus = $map['pipelineStatus'];
        }
        if (isset($map['queueCheckPointWrites'])) {
            $model->queueCheckPointWrites = $map['queueCheckPointWrites'];
        }
        if (isset($map['queueMaxBytes'])) {
            $model->queueMaxBytes = $map['queueMaxBytes'];
        }
        if (isset($map['queueType'])) {
            $model->queueType = $map['queueType'];
        }
        if (isset($map['workers'])) {
            $model->workers = $map['workers'];
        }

        return $model;
    }
}
