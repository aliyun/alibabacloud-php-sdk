<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgAddModelTrainJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $trainSteps;
    protected $_name = [
        'imageUrl' => 'imageUrl',
        'name' => 'name',
        'objectType' => 'objectType',
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
        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['imageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['imageUrl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
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
        if (isset($map['imageUrl'])) {
            if (!empty($map['imageUrl'])) {
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['imageUrl'] as $item1) {
                    $model->imageUrl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['trainSteps'])) {
            $model->trainSteps = $map['trainSteps'];
        }

        return $model;
    }
}
