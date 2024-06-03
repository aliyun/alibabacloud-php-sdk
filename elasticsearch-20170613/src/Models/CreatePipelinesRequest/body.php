<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreatePipelinesRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
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
     * @description This parameter is required.
     *
     * @example input { } filter { } output { }
     *
     * @var string
     */
    public $config;

    /**
     * @example this is a test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example pipeline-test
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example 1024
     *
     * @var int
     */
    public $queueCheckPointWrites;

    /**
     * @example 1024
     *
     * @var int
     */
    public $queueMaxBytes;

    /**
     * @example MEMORY
     *
     * @var string
     */
    public $queueType;

    /**
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
        'pipelineId'            => 'pipelineId',
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
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
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
     * @return body
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
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
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
