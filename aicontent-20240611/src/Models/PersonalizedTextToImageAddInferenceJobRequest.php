<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class PersonalizedTextToImageAddInferenceJobRequest extends Model
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
     * @var string[]
     */
    public $imageUrl;

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

    /**
     * @example 1
     *
     * @var float
     */
    public $strength;

    /**
     * @example 800
     *
     * @var int
     */
    public $trainSteps;
    protected $_name = [
        'imageNumber' => 'imageNumber',
        'imageUrl'    => 'imageUrl',
        'prompt'      => 'prompt',
        'seed'        => 'seed',
        'strength'    => 'strength',
        'trainSteps'  => 'trainSteps',
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
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }
        if (null !== $this->seed) {
            $res['seed'] = $this->seed;
        }
        if (null !== $this->strength) {
            $res['strength'] = $this->strength;
        }
        if (null !== $this->trainSteps) {
            $res['trainSteps'] = $this->trainSteps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PersonalizedTextToImageAddInferenceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['imageNumber'])) {
            $model->imageNumber = $map['imageNumber'];
        }
        if (isset($map['imageUrl'])) {
            if (!empty($map['imageUrl'])) {
                $model->imageUrl = $map['imageUrl'];
            }
        }
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }
        if (isset($map['seed'])) {
            $model->seed = $map['seed'];
        }
        if (isset($map['strength'])) {
            $model->strength = $map['strength'];
        }
        if (isset($map['trainSteps'])) {
            $model->trainSteps = $map['trainSteps'];
        }

        return $model;
    }
}
