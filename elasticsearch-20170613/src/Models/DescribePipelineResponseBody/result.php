<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $batchDelay;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $pipelineStatus;

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
    public $queueType;

    /**
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
