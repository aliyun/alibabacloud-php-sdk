<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo\textAreas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo\textAreas\texts\imageRect;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo\textAreas\texts\textRect;

class texts extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var int
     */
    public $fontsize;

    /**
     * @var string
     */
    public $horizontalLayout;

    /**
     * @var imageRect
     */
    public $imageRect;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $lineCount;

    /**
     * @var textRect
     */
    public $textRect;

    /**
     * @var bool
     */
    public $valid;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $verticalLayout;
    protected $_name = [
        'color' => 'Color',
        'fontsize' => 'Fontsize',
        'horizontalLayout' => 'HorizontalLayout',
        'imageRect' => 'ImageRect',
        'language' => 'Language',
        'lineCount' => 'LineCount',
        'textRect' => 'TextRect',
        'valid' => 'Valid',
        'value' => 'Value',
        'verticalLayout' => 'VerticalLayout',
    ];

    public function validate()
    {
        if (null !== $this->imageRect) {
            $this->imageRect->validate();
        }
        if (null !== $this->textRect) {
            $this->textRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        if (null !== $this->fontsize) {
            $res['Fontsize'] = $this->fontsize;
        }

        if (null !== $this->horizontalLayout) {
            $res['HorizontalLayout'] = $this->horizontalLayout;
        }

        if (null !== $this->imageRect) {
            $res['ImageRect'] = null !== $this->imageRect ? $this->imageRect->toArray($noStream) : $this->imageRect;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->lineCount) {
            $res['LineCount'] = $this->lineCount;
        }

        if (null !== $this->textRect) {
            $res['TextRect'] = null !== $this->textRect ? $this->textRect->toArray($noStream) : $this->textRect;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->verticalLayout) {
            $res['VerticalLayout'] = $this->verticalLayout;
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
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        if (isset($map['Fontsize'])) {
            $model->fontsize = $map['Fontsize'];
        }

        if (isset($map['HorizontalLayout'])) {
            $model->horizontalLayout = $map['HorizontalLayout'];
        }

        if (isset($map['ImageRect'])) {
            $model->imageRect = imageRect::fromMap($map['ImageRect']);
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LineCount'])) {
            $model->lineCount = $map['LineCount'];
        }

        if (isset($map['TextRect'])) {
            $model->textRect = textRect::fromMap($map['TextRect']);
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['VerticalLayout'])) {
            $model->verticalLayout = $map['VerticalLayout'];
        }

        return $model;
    }
}
