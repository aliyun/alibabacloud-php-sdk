<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig\assessor;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig\tuner;
use AlibabaCloud\Tea\Model;

class ymlConfig extends Model
{
    /**
     * @var assessor
     */
    public $assessor;

    /**
     * @var bool
     */
    public $debug;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var int
     */
    public $maxTrialNumber;

    /**
     * @var int
     */
    public $trialConcurrency;

    /**
     * @var tuner
     */
    public $tuner;
    protected $_name = [
        'assessor'         => 'assessor',
        'debug'            => 'debug',
        'experimentName'   => 'experiment_name',
        'logLevel'         => 'log_level',
        'maxTrialNumber'   => 'max_trial_number',
        'trialConcurrency' => 'trial_concurrency',
        'tuner'            => 'tuner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assessor) {
            $res['assessor'] = null !== $this->assessor ? $this->assessor->toMap() : null;
        }
        if (null !== $this->debug) {
            $res['debug'] = $this->debug;
        }
        if (null !== $this->experimentName) {
            $res['experiment_name'] = $this->experimentName;
        }
        if (null !== $this->logLevel) {
            $res['log_level'] = $this->logLevel;
        }
        if (null !== $this->maxTrialNumber) {
            $res['max_trial_number'] = $this->maxTrialNumber;
        }
        if (null !== $this->trialConcurrency) {
            $res['trial_concurrency'] = $this->trialConcurrency;
        }
        if (null !== $this->tuner) {
            $res['tuner'] = null !== $this->tuner ? $this->tuner->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ymlConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assessor'])) {
            $model->assessor = assessor::fromMap($map['assessor']);
        }
        if (isset($map['debug'])) {
            $model->debug = $map['debug'];
        }
        if (isset($map['experiment_name'])) {
            $model->experimentName = $map['experiment_name'];
        }
        if (isset($map['log_level'])) {
            $model->logLevel = $map['log_level'];
        }
        if (isset($map['max_trial_number'])) {
            $model->maxTrialNumber = $map['max_trial_number'];
        }
        if (isset($map['trial_concurrency'])) {
            $model->trialConcurrency = $map['trial_concurrency'];
        }
        if (isset($map['tuner'])) {
            $model->tuner = tuner::fromMap($map['tuner']);
        }

        return $model;
    }
}
