<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

use AlibabaCloud\Dara\Model;

class subtitle extends Model
{
    /**
     * @var string
     */
    public $alignment;

    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $font;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var int
     */
    public $maxCharLength;

    /**
     * @var int
     */
    public $positionX;

    /**
     * @var int
     */
    public $positionY;

    /**
     * @var int
     */
    public $textHeight;

    /**
     * @var int
     */
    public $textWidth;
    protected $_name = [
        'alignment' => 'alignment',
        'backgroundColor' => 'backgroundColor',
        'font' => 'font',
        'fontColor' => 'fontColor',
        'fontSize' => 'fontSize',
        'maxCharLength' => 'maxCharLength',
        'positionX' => 'positionX',
        'positionY' => 'positionY',
        'textHeight' => 'textHeight',
        'textWidth' => 'textWidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
