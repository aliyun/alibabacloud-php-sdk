<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var int
     */
    public $queueCheckPointWrites;

    /**
     * @var int
     */
    public $queueMaxBytes;

    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $batchDelay;

    /**
     * @var int
     */
    public $workers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var string
     */
    public $pipelineStatus;
    protected $_name = [
        'pipelineId'            => 'pipelineId',
        'gmtUpdateTime'         => 'gmtUpdateTime',
        'queueType'             => 'queueType',
        'queueCheckPointWrites' => 'queueCheckPointWrites',
        'queueMaxBytes'         => 'queueMaxBytes',
        'config'                => 'config',
        'batchDelay'            => 'batchDelay',
        'workers'               => 'workers',
        'description'           => 'description',
        'gmtCreatedTime'        => 'gmtCreatedTime',
        'batchSize'             => 'batchSize',
        'pipelineStatus'        => 'pipelineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->queueType) {
            $res['queueType'] = $this->queueType;
        }
        if (null !== $this->queueCheckPointWrites) {
            $res['queueCheckPointWrites'] = $this->queueCheckPointWrites;
        }
        if (null !== $this->queueMaxBytes) {
            $res['queueMaxBytes'] = $this->queueMaxBytes;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->batchDelay) {
            $res['batchDelay'] = $this->batchDelay;
        }
        if (null !== $this->workers) {
            $res['workers'] = $this->workers;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->batchSize) {
            $res['batchSize'] = $this->batchSize;
        }
        if (null !== $this->pipelineStatus) {
            $res['pipelineStatus'] = $this->pipelineStatus;
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
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['queueType'])) {
            $model->queueType = $map['queueType'];
        }
        if (isset($map['queueCheckPointWrites'])) {
            $model->queueCheckPointWrites = $map['queueCheckPointWrites'];
        }
        if (isset($map['queueMaxBytes'])) {
            $model->queueMaxBytes = $map['queueMaxBytes'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['batchDelay'])) {
            $model->batchDelay = $map['batchDelay'];
        }
        if (isset($map['workers'])) {
            $model->workers = $map['workers'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['batchSize'])) {
            $model->batchSize = $map['batchSize'];
        }
        if (isset($map['pipelineStatus'])) {
            $model->pipelineStatus = $map['pipelineStatus'];
        }

        return $model;
    }
}
