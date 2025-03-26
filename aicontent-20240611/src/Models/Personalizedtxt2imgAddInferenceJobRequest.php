<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgAddInferenceJobRequest extends Model
{
    /**
     * @var int
     */
    public $imageNumber;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $seed;
    protected $_name = [
        'imageNumber' => 'imageNumber',
        'modelId' => 'modelId',
        'prompt' => 'prompt',
        'seed' => 'seed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageNumber) {
            $res['imageNumber'] = $this->imageNumber;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->seed) {
            $res['seed'] = $this->seed;
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
        if (isset($map['imageNumber'])) {
            $model->imageNumber = $map['imageNumber'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['seed'])) {
            $model->seed = $map['seed'];
        }

        return $model;
    }
}
