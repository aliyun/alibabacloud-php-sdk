<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig\assessor;

use AlibabaCloud\Tea\Model;

class classArgs extends Model
{
    /**
     * @var bool
     */
    public $earlystop;

    /**
     * @var string
     */
    public $movingAvg;

    /**
     * @var string
     */
    public $optimizeMode;

    /**
     * @var float
     */
    public $proportion;

    /**
     * @var int
     */
    public $startStep;
    protected $_name = [
        'earlystop'    => 'earlystop',
        'movingAvg'    => 'moving_avg',
        'optimizeMode' => 'optimize_mode',
        'proportion'   => 'proportion',
        'startStep'    => 'start_step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->earlystop) {
            $res['earlystop'] = $this->earlystop;
        }
        if (null !== $this->movingAvg) {
            $res['moving_avg'] = $this->movingAvg;
        }
        if (null !== $this->optimizeMode) {
            $res['optimize_mode'] = $this->optimizeMode;
        }
        if (null !== $this->proportion) {
            $res['proportion'] = $this->proportion;
        }
        if (null !== $this->startStep) {
            $res['start_step'] = $this->startStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['earlystop'])) {
            $model->earlystop = $map['earlystop'];
        }
        if (isset($map['moving_avg'])) {
            $model->movingAvg = $map['moving_avg'];
        }
        if (isset($map['optimize_mode'])) {
            $model->optimizeMode = $map['optimize_mode'];
        }
        if (isset($map['proportion'])) {
            $model->proportion = $map['proportion'];
        }
        if (isset($map['start_step'])) {
            $model->startStep = $map['start_step'];
        }

        return $model;
    }
}
