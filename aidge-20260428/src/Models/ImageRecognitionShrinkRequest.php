<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageRecognitionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $nonObjectDetectElementsShrink;

    /**
     * @var string
     */
    public $objectDetectElementsShrink;

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
        'nonObjectDetectElementsShrink' => 'NonObjectDetectElements',
        'objectDetectElementsShrink' => 'ObjectDetectElements',
        'returnBorderPixel' => 'ReturnBorderPixel',
        'returnCharacter' => 'ReturnCharacter',
        'returnCharacterProp' => 'ReturnCharacterProp',
        'returnProductNum' => 'ReturnProductNum',
        'returnProductProp' => 'ReturnProductProp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->nonObjectDetectElementsShrink) {
            $res['NonObjectDetectElements'] = $this->nonObjectDetectElementsShrink;
        }

        if (null !== $this->objectDetectElementsShrink) {
            $res['ObjectDetectElements'] = $this->objectDetectElementsShrink;
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
            $model->nonObjectDetectElementsShrink = $map['NonObjectDetectElements'];
        }

        if (isset($map['ObjectDetectElements'])) {
            $model->objectDetectElementsShrink = $map['ObjectDetectElements'];
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
