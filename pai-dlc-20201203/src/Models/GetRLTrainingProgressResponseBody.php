<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRLTrainingProgressResponseBody extends Model
{
    /**
     * @var RLProgressBuffer
     */
    public $buffer;

    /**
     * @var RLProgressConfig
     */
    public $config;

    /**
     * @var RLProgressEval
     */
    public $eval;

    /**
     * @var RLProgressFatal[]
     */
    public $fatal;

    /**
     * @var bool
     */
    public $found;

    /**
     * @var bool
     */
    public $healthOk;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $lastLogTime;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $phaseTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RLProgressRollout
     */
    public $rollout;

    /**
     * @var int
     */
    public $serverNow;

    /**
     * @var RLProgressSlow
     */
    public $slow;

    /**
     * @var RLProgressStages
     */
    public $stages;

    /**
     * @var RLProgressStep
     */
    public $step;

    /**
     * @var float
     */
    public $throughput;

    /**
     * @var string
     */
    public $trainMode;

    /**
     * @var RLProgressTrainer
     */
    public $trainer;
    protected $_name = [
        'buffer' => 'Buffer',
        'config' => 'Config',
        'eval' => 'Eval',
        'fatal' => 'Fatal',
        'found' => 'Found',
        'healthOk' => 'HealthOk',
        'jobId' => 'JobId',
        'lastLogTime' => 'LastLogTime',
        'phase' => 'Phase',
        'phaseTime' => 'PhaseTime',
        'requestId' => 'RequestId',
        'rollout' => 'Rollout',
        'serverNow' => 'ServerNow',
        'slow' => 'Slow',
        'stages' => 'Stages',
        'step' => 'Step',
        'throughput' => 'Throughput',
        'trainMode' => 'TrainMode',
        'trainer' => 'Trainer',
    ];

    public function validate()
    {
        if (null !== $this->buffer) {
            $this->buffer->validate();
        }
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->eval) {
            $this->eval->validate();
        }
        if (\is_array($this->fatal)) {
            Model::validateArray($this->fatal);
        }
        if (null !== $this->rollout) {
            $this->rollout->validate();
        }
        if (null !== $this->slow) {
            $this->slow->validate();
        }
        if (null !== $this->stages) {
            $this->stages->validate();
        }
        if (null !== $this->step) {
            $this->step->validate();
        }
        if (null !== $this->trainer) {
            $this->trainer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buffer) {
            $res['Buffer'] = null !== $this->buffer ? $this->buffer->toArray($noStream) : $this->buffer;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->eval) {
            $res['Eval'] = null !== $this->eval ? $this->eval->toArray($noStream) : $this->eval;
        }

        if (null !== $this->fatal) {
            if (\is_array($this->fatal)) {
                $res['Fatal'] = [];
                $n1 = 0;
                foreach ($this->fatal as $item1) {
                    $res['Fatal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->found) {
            $res['Found'] = $this->found;
        }

        if (null !== $this->healthOk) {
            $res['HealthOk'] = $this->healthOk;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->lastLogTime) {
            $res['LastLogTime'] = $this->lastLogTime;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->phaseTime) {
            $res['PhaseTime'] = $this->phaseTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rollout) {
            $res['Rollout'] = null !== $this->rollout ? $this->rollout->toArray($noStream) : $this->rollout;
        }

        if (null !== $this->serverNow) {
            $res['ServerNow'] = $this->serverNow;
        }

        if (null !== $this->slow) {
            $res['Slow'] = null !== $this->slow ? $this->slow->toArray($noStream) : $this->slow;
        }

        if (null !== $this->stages) {
            $res['Stages'] = null !== $this->stages ? $this->stages->toArray($noStream) : $this->stages;
        }

        if (null !== $this->step) {
            $res['Step'] = null !== $this->step ? $this->step->toArray($noStream) : $this->step;
        }

        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
        }

        if (null !== $this->trainer) {
            $res['Trainer'] = null !== $this->trainer ? $this->trainer->toArray($noStream) : $this->trainer;
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
        if (isset($map['Buffer'])) {
            $model->buffer = RLProgressBuffer::fromMap($map['Buffer']);
        }

        if (isset($map['Config'])) {
            $model->config = RLProgressConfig::fromMap($map['Config']);
        }

        if (isset($map['Eval'])) {
            $model->eval = RLProgressEval::fromMap($map['Eval']);
        }

        if (isset($map['Fatal'])) {
            if (!empty($map['Fatal'])) {
                $model->fatal = [];
                $n1 = 0;
                foreach ($map['Fatal'] as $item1) {
                    $model->fatal[$n1] = RLProgressFatal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Found'])) {
            $model->found = $map['Found'];
        }

        if (isset($map['HealthOk'])) {
            $model->healthOk = $map['HealthOk'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['LastLogTime'])) {
            $model->lastLogTime = $map['LastLogTime'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['PhaseTime'])) {
            $model->phaseTime = $map['PhaseTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Rollout'])) {
            $model->rollout = RLProgressRollout::fromMap($map['Rollout']);
        }

        if (isset($map['ServerNow'])) {
            $model->serverNow = $map['ServerNow'];
        }

        if (isset($map['Slow'])) {
            $model->slow = RLProgressSlow::fromMap($map['Slow']);
        }

        if (isset($map['Stages'])) {
            $model->stages = RLProgressStages::fromMap($map['Stages']);
        }

        if (isset($map['Step'])) {
            $model->step = RLProgressStep::fromMap($map['Step']);
        }

        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }

        if (isset($map['Trainer'])) {
            $model->trainer = RLProgressTrainer::fromMap($map['Trainer']);
        }

        return $model;
    }
}
