<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class EvaluateTraceRequest extends Model
{
    /**
     * @description The name of the application to which the trace belongs.
     *
     * @example my-llm-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description If the value retrieved at the JSON path is itself a JSON string, further JSON path definitions within this JSON are necessary to get the actual value.
     *
     * This parameter is required.
     *
     * @var EvaluationConfig
     */
    public $evaluationConfig;

    /**
     * @description The ID of the evaluation task. If not specified, the system randomly generates and returns an ID. You can use this ID to quickly search for evaluation results.
     *
     * @example 44aea0ee00000000be5be24b2abb8f98
     *
     * @var string
     */
    public $evaluationId;

    /**
     * @description The end time of the search time range, in UTC format.
     *
     * @example 2025-04-05 13:24:25
     * 2025-04-05
     *
     * @var string
     */
    public $maxTime;

    /**
     * @description The start time of the search time range, in UTC format.
     *
     * @example 2025-04-05 13:24:25
     * 2025-04-05
     *
     * @var string
     */
    public $minTime;

    /**
     * @description The configuration structure to access the model used internally by the evaluation trace.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->evaluationConfig) {
            $res['EvaluationConfig'] = null !== $this->evaluationConfig ? $this->evaluationConfig->toMap() : null;
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
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateTraceRequest
     */
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
