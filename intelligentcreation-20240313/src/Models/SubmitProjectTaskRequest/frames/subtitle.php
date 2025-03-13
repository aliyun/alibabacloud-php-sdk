<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

use AlibabaCloud\Tea\Model;

class subtitle extends Model
{
    /**
     * @example BottomLeft
     *
     * @var string
     */
    public $alignment;

    /**
     * @example #ffffff
     *
     * @var string
     */
    public $backgroundColor;

    /**
     * @example SimSun
     *
     * @var string
     */
    public $font;

    /**
     * @example #ffffff
     *
     * @var string
     */
    public $fontColor;

    /**
     * @example 32
     *
     * @var int
     */
    public $fontSize;

    /**
     * @example 11
     *
     * @var int
     */
    public $maxCharLength;

    /**
     * @example 2
     *
     * @var int
     */
    public $positionX;

    /**
     * @example 1
     *
     * @var int
     */
    public $positionY;

    /**
     * @example 22
     *
     * @var int
     */
    public $textHeight;

    /**
     * @example 11
     *
     * @var int
     */
    public $textWidth;
    protected $_name = [
        'alignment'       => 'alignment',
        'backgroundColor' => 'backgroundColor',
        'font'            => 'font',
        'fontColor'       => 'fontColor',
        'fontSize'        => 'fontSize',
        'maxCharLength'   => 'maxCharLength',
        'positionX'       => 'positionX',
        'positionY'       => 'positionY',
        'textHeight'      => 'textHeight',
        'textWidth'       => 'textWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['alignment'] = $this->alignment;
        }
        if (null !== $this->backgroundColor) {
            $res['backgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->font) {
            $res['font'] = $this->font;
        }
        if (null !== $this->fontColor) {
            $res['fontColor'] = $this->fontColor;
        }
        if (null !== $this->fontSize) {
            $res['fontSize'] = $this->fontSize;
        }
        if (null !== $this->maxCharLength) {
            $res['maxCharLength'] = $this->maxCharLength;
        }
        if (null !== $this->positionX) {
            $res['positionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['positionY'] = $this->positionY;
        }
        if (null !== $this->textHeight) {
            $res['textHeight'] = $this->textHeight;
        }
        if (null !== $this->textWidth) {
            $res['textWidth'] = $this->textWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alignment'])) {
            $model->alignment = $map['alignment'];
        }
        if (isset($map['backgroundColor'])) {
            $model->backgroundColor = $map['backgroundColor'];
        }
        if (isset($map['font'])) {
            $model->font = $map['font'];
        }
        if (isset($map['fontColor'])) {
            $model->fontColor = $map['fontColor'];
        }
        if (isset($map['fontSize'])) {
            $model->fontSize = $map['fontSize'];
        }
        if (isset($map['maxCharLength'])) {
            $model->maxCharLength = $map['maxCharLength'];
        }
        if (isset($map['positionX'])) {
            $model->positionX = $map['positionX'];
        }
        if (isset($map['positionY'])) {
            $model->positionY = $map['positionY'];
        }
        if (isset($map['textHeight'])) {
            $model->textHeight = $map['textHeight'];
        }
        if (isset($map['textWidth'])) {
            $model->textWidth = $map['textWidth'];
        }

        return $model;
    }
}
