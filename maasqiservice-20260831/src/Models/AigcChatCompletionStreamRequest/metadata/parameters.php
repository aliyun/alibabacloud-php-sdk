<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest\metadata;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var float
     */
    public $guidanceScale;

    /**
     * @var int
     */
    public $n;

    /**
     * @var string
     */
    public $negativePrompt;

    /**
     * @var int
     */
    public $numInferenceSteps;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'guidanceScale' => 'guidanceScale',
        'n' => 'n',
        'negativePrompt' => 'negativePrompt',
        'numInferenceSteps' => 'numInferenceSteps',
        'seed' => 'seed',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guidanceScale) {
            $res['guidanceScale'] = $this->guidanceScale;
        }

        if (null !== $this->n) {
            $res['n'] = $this->n;
        }

        if (null !== $this->negativePrompt) {
            $res['negativePrompt'] = $this->negativePrompt;
        }

        if (null !== $this->numInferenceSteps) {
            $res['numInferenceSteps'] = $this->numInferenceSteps;
        }

        if (null !== $this->seed) {
            $res['seed'] = $this->seed;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['guidanceScale'])) {
            $model->guidanceScale = $map['guidanceScale'];
        }

        if (isset($map['n'])) {
            $model->n = $map['n'];
        }

        if (isset($map['negativePrompt'])) {
            $model->negativePrompt = $map['negativePrompt'];
        }

        if (isset($map['numInferenceSteps'])) {
            $model->numInferenceSteps = $map['numInferenceSteps'];
        }

        if (isset($map['seed'])) {
            $model->seed = $map['seed'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
