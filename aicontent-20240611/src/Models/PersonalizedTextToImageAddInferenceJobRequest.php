<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class PersonalizedTextToImageAddInferenceJobRequest extends Model
{
    /**
     * @var int
     */
    public $imageNumber;

    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var float
     */
    public $strength;

    /**
     * @var int
     */
    public $trainSteps;
    protected $_name = [
        'imageNumber' => 'imageNumber',
        'imageUrl' => 'imageUrl',
        'prompt' => 'prompt',
        'seed' => 'seed',
        'strength' => 'strength',
        'trainSteps' => 'trainSteps',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrl)) {
            Model::validateArray($this->imageUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageNumber) {
            $res['imageNumber'] = $this->imageNumber;
        }

        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['imageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['imageUrl'][$n1++] = $item1;
                }
            }
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

        if (isset($map['imageUrl'])) {
            if (!empty($map['imageUrl'])) {
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['imageUrl'] as $item1) {
                    $model->imageUrl[$n1++] = $item1;
                }
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
