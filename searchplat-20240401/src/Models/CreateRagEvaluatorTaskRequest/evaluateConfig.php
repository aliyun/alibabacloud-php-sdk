<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskRequest;

use AlibabaCloud\Dara\Model;

class evaluateConfig extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var bool
     */
    public $runAllStep;
    protected $_name = [
        'model' => 'model',
        'prompt' => 'prompt',
        'runAllStep' => 'run_all_step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->runAllStep) {
            $res['run_all_step'] = $this->runAllStep;
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
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['run_all_step'])) {
            $model->runAllStep = $map['run_all_step'];
        }

        return $model;
    }
}
