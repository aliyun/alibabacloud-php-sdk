<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgAddInferenceJobCmd extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $imageNumber;

    /**
     * @description This parameter is required.
     *
     * @example xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $modelId;

    /**
     * @description This parameter is required.
     *
     * @example a <special-token> in the snow
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 1
     *
     * @var int
     */
    public $seed;
    protected $_name = [
        'imageNumber' => 'imageNumber',
        'modelId'     => 'modelId',
        'prompt'      => 'prompt',
        'seed'        => 'seed',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgAddInferenceJobCmd
     */
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
