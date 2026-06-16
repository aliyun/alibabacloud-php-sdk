<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageRecognitionRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int[]
     */
    public $nonObjectDetectElements;

    /**
     * @var int[]
     */
    public $objectDetectElements;

    /**
     * @var int
     */
    public $returnBorderPixel;

    /**
     * @var int
     */
    public $returnCharacter;

    /**
     * @var int
     */
    public $returnCharacterProp;

    /**
     * @var int
     */
    public $returnProductNum;

    /**
     * @var int
     */
    public $returnProductProp;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'nonObjectDetectElements' => 'NonObjectDetectElements',
        'objectDetectElements' => 'ObjectDetectElements',
        'returnBorderPixel' => 'ReturnBorderPixel',
        'returnCharacter' => 'ReturnCharacter',
        'returnCharacterProp' => 'ReturnCharacterProp',
        'returnProductNum' => 'ReturnProductNum',
        'returnProductProp' => 'ReturnProductProp',
    ];

    public function validate()
    {
        if (\is_array($this->nonObjectDetectElements)) {
            Model::validateArray($this->nonObjectDetectElements);
        }
        if (\is_array($this->objectDetectElements)) {
            Model::validateArray($this->objectDetectElements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->nonObjectDetectElements) {
            if (\is_array($this->nonObjectDetectElements)) {
                $res['NonObjectDetectElements'] = [];
                $n1 = 0;
                foreach ($this->nonObjectDetectElements as $item1) {
                    $res['NonObjectDetectElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectDetectElements) {
            if (\is_array($this->objectDetectElements)) {
                $res['ObjectDetectElements'] = [];
                $n1 = 0;
                foreach ($this->objectDetectElements as $item1) {
                    $res['ObjectDetectElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->returnBorderPixel) {
            $res['ReturnBorderPixel'] = $this->returnBorderPixel;
        }

        if (null !== $this->returnCharacter) {
            $res['ReturnCharacter'] = $this->returnCharacter;
        }

        if (null !== $this->returnCharacterProp) {
            $res['ReturnCharacterProp'] = $this->returnCharacterProp;
        }

        if (null !== $this->returnProductNum) {
            $res['ReturnProductNum'] = $this->returnProductNum;
        }

        if (null !== $this->returnProductProp) {
            $res['ReturnProductProp'] = $this->returnProductProp;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['NonObjectDetectElements'])) {
            if (!empty($map['NonObjectDetectElements'])) {
                $model->nonObjectDetectElements = [];
                $n1 = 0;
                foreach ($map['NonObjectDetectElements'] as $item1) {
                    $model->nonObjectDetectElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectDetectElements'])) {
            if (!empty($map['ObjectDetectElements'])) {
                $model->objectDetectElements = [];
                $n1 = 0;
                foreach ($map['ObjectDetectElements'] as $item1) {
                    $model->objectDetectElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReturnBorderPixel'])) {
            $model->returnBorderPixel = $map['ReturnBorderPixel'];
        }

        if (isset($map['ReturnCharacter'])) {
            $model->returnCharacter = $map['ReturnCharacter'];
        }

        if (isset($map['ReturnCharacterProp'])) {
            $model->returnCharacterProp = $map['ReturnCharacterProp'];
        }

        if (isset($map['ReturnProductNum'])) {
            $model->returnProductNum = $map['ReturnProductNum'];
        }

        if (isset($map['ReturnProductProp'])) {
            $model->returnProductProp = $map['ReturnProductProp'];
        }

        return $model;
    }
}
