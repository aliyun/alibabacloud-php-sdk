<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class EvaluateTraceRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var EvaluationConfig
     */
    public $evaluationConfig;

    /**
     * @var string
     */
    public $evaluationId;

    /**
     * @var string
     */
    public $maxTime;

    /**
     * @var string
     */
    public $minTime;

    /**
     * @var ModelConfig
     */
    public $modelConfig;
    protected $_name = [
        'appName' => 'AppName',
        'evaluationConfig' => 'EvaluationConfig',
        'evaluationId' => 'EvaluationId',
        'maxTime' => 'MaxTime',
        'minTime' => 'MinTime',
        'modelConfig' => 'ModelConfig',
    ];

    public function validate()
    {
        if (null !== $this->evaluationConfig) {
            $this->evaluationConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->evaluationConfig) {
            $res['EvaluationConfig'] = null !== $this->evaluationConfig ? $this->evaluationConfig->toArray($noStream) : $this->evaluationConfig;
        }

        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }

        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }

        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['EvaluationConfig'])) {
            $model->evaluationConfig = EvaluationConfig::fromMap($map['EvaluationConfig']);
        }

        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }

        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }

        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = ModelConfig::fromMap($map['ModelConfig']);
        }

        return $model;
    }
}
