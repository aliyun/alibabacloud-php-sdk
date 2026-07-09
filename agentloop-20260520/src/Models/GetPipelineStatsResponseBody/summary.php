<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsResponseBody;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $avgElapsedMs;

    /**
     * @var int
     */
    public $cancelledRuns;

    /**
     * @var int
     */
    public $committedWatermark;

    /**
     * @var int
     */
    public $failedRuns;

    /**
     * @var int
     */
    public $scheduleLagSeconds;

    /**
     * @var int
     */
    public $succeededRuns;

    /**
     * @var float
     */
    public $successRate;

    /**
     * @var int
     */
    public $totalOutputBytes;

    /**
     * @var int
     */
    public $totalOutputRows;

    /**
     * @var int
     */
    public $totalProcessedBytes;

    /**
     * @var int
     */
    public $totalProcessedRows;

    /**
     * @var int
     */
    public $totalRuns;
    protected $_name = [
        'avgElapsedMs' => 'avgElapsedMs',
        'cancelledRuns' => 'cancelledRuns',
        'committedWatermark' => 'committedWatermark',
        'failedRuns' => 'failedRuns',
        'scheduleLagSeconds' => 'scheduleLagSeconds',
        'succeededRuns' => 'succeededRuns',
        'successRate' => 'successRate',
        'totalOutputBytes' => 'totalOutputBytes',
        'totalOutputRows' => 'totalOutputRows',
        'totalProcessedBytes' => 'totalProcessedBytes',
        'totalProcessedRows' => 'totalProcessedRows',
        'totalRuns' => 'totalRuns',
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

        if (null !== $this->cancelledRuns) {
            $res['cancelledRuns'] = $this->cancelledRuns;
        }

        if (null !== $this->committedWatermark) {
            $res['committedWatermark'] = $this->committedWatermark;
        }

        if (null !== $this->failedRuns) {
            $res['failedRuns'] = $this->failedRuns;
        }

        if (null !== $this->scheduleLagSeconds) {
            $res['scheduleLagSeconds'] = $this->scheduleLagSeconds;
        }

        if (null !== $this->succeededRuns) {
            $res['succeededRuns'] = $this->succeededRuns;
        }

        if (null !== $this->successRate) {
            $res['successRate'] = $this->successRate;
        }

        if (null !== $this->totalOutputBytes) {
            $res['totalOutputBytes'] = $this->totalOutputBytes;
        }

        if (null !== $this->totalOutputRows) {
            $res['totalOutputRows'] = $this->totalOutputRows;
        }

        if (null !== $this->totalProcessedBytes) {
            $res['totalProcessedBytes'] = $this->totalProcessedBytes;
        }

        if (null !== $this->totalProcessedRows) {
            $res['totalProcessedRows'] = $this->totalProcessedRows;
        }

        if (null !== $this->totalRuns) {
            $res['totalRuns'] = $this->totalRuns;
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

        if (isset($map['cancelledRuns'])) {
            $model->cancelledRuns = $map['cancelledRuns'];
        }

        if (isset($map['committedWatermark'])) {
            $model->committedWatermark = $map['committedWatermark'];
        }

        if (isset($map['failedRuns'])) {
            $model->failedRuns = $map['failedRuns'];
        }

        if (isset($map['scheduleLagSeconds'])) {
            $model->scheduleLagSeconds = $map['scheduleLagSeconds'];
        }

        if (isset($map['succeededRuns'])) {
            $model->succeededRuns = $map['succeededRuns'];
        }

        if (isset($map['successRate'])) {
            $model->successRate = $map['successRate'];
        }

        if (isset($map['totalOutputBytes'])) {
            $model->totalOutputBytes = $map['totalOutputBytes'];
        }

        if (isset($map['totalOutputRows'])) {
            $model->totalOutputRows = $map['totalOutputRows'];
        }

        if (isset($map['totalProcessedBytes'])) {
            $model->totalProcessedBytes = $map['totalProcessedBytes'];
        }

        if (isset($map['totalProcessedRows'])) {
            $model->totalProcessedRows = $map['totalProcessedRows'];
        }

        if (isset($map['totalRuns'])) {
            $model->totalRuns = $map['totalRuns'];
        }

        return $model;
    }
}
