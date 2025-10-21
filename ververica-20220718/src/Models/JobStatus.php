<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class JobStatus extends Model
{
    /**
     * @var string
     */
    public $currentJobStatus;

    /**
     * @var JobFailure
     */
    public $failure;

    /**
     * @var int
     */
    public $healthScore;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var JobStatusRunning
     */
    public $running;
    protected $_name = [
        'currentJobStatus' => 'currentJobStatus',
        'failure' => 'failure',
        'healthScore' => 'healthScore',
        'riskLevel' => 'riskLevel',
        'running' => 'running',
    ];

    public function validate()
    {
        if (null !== $this->failure) {
            $this->failure->validate();
        }
        if (null !== $this->running) {
            $this->running->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentJobStatus) {
            $res['currentJobStatus'] = $this->currentJobStatus;
        }

        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toArray($noStream) : $this->failure;
        }

        if (null !== $this->healthScore) {
            $res['healthScore'] = $this->healthScore;
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->running) {
            $res['running'] = null !== $this->running ? $this->running->toArray($noStream) : $this->running;
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
        if (isset($map['currentJobStatus'])) {
            $model->currentJobStatus = $map['currentJobStatus'];
        }

        if (isset($map['failure'])) {
            $model->failure = JobFailure::fromMap($map['failure']);
        }

        if (isset($map['healthScore'])) {
            $model->healthScore = $map['healthScore'];
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['running'])) {
            $model->running = JobStatusRunning::fromMap($map['running']);
        }

        return $model;
    }
}
