<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsResponseBody;

use AlibabaCloud\Dara\Model;

class timeSeries extends Model
{
    /**
     * @var int
     */
    public $avgElapsedMs;

    /**
     * @var int
     */
    public $outputBytes;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var int
     */
    public $processedBytes;

    /**
     * @var int
     */
    public $processedRows;

    /**
     * @var int
     */
    public $runs;

    /**
     * @var int
     */
    public $succeededRuns;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'avgElapsedMs' => 'avgElapsedMs',
        'outputBytes' => 'outputBytes',
        'outputRows' => 'outputRows',
        'processedBytes' => 'processedBytes',
        'processedRows' => 'processedRows',
        'runs' => 'runs',
        'succeededRuns' => 'succeededRuns',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgElapsedMs) {
            $res['avgElapsedMs'] = $this->avgElapsedMs;
        }

        if (null !== $this->outputBytes) {
            $res['outputBytes'] = $this->outputBytes;
        }

        if (null !== $this->outputRows) {
            $res['outputRows'] = $this->outputRows;
        }

        if (null !== $this->processedBytes) {
            $res['processedBytes'] = $this->processedBytes;
        }

        if (null !== $this->processedRows) {
            $res['processedRows'] = $this->processedRows;
        }

        if (null !== $this->runs) {
            $res['runs'] = $this->runs;
        }

        if (null !== $this->succeededRuns) {
            $res['succeededRuns'] = $this->succeededRuns;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['avgElapsedMs'])) {
            $model->avgElapsedMs = $map['avgElapsedMs'];
        }

        if (isset($map['outputBytes'])) {
            $model->outputBytes = $map['outputBytes'];
        }

        if (isset($map['outputRows'])) {
            $model->outputRows = $map['outputRows'];
        }

        if (isset($map['processedBytes'])) {
            $model->processedBytes = $map['processedBytes'];
        }

        if (isset($map['processedRows'])) {
            $model->processedRows = $map['processedRows'];
        }

        if (isset($map['runs'])) {
            $model->runs = $map['runs'];
        }

        if (isset($map['succeededRuns'])) {
            $model->succeededRuns = $map['succeededRuns'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
