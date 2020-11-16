<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component;

use AlibabaCloud\Tea\Model;

class textLayerContent extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var float
     */
    public $sizeNormalized;

    /**
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @var string
     */
    public $borderColor;
    protected $_name = [
        'text'                  => 'Text',
        'color'                 => 'Color',
        'fontName'              => 'FontName',
        'sizeNormalized'        => 'SizeNormalized',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'borderColor'           => 'BorderColor',
    ];

    public function validate()
    {
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('color', $this->color, true);
        Model::validateRequired('fontName', $this->fontName, true);
        Model::validateRequired('sizeNormalized', $this->sizeNormalized, true);
        Model::validateRequired('borderWidthNormalized', $this->borderWidthNormalized, true);
        Model::validateRequired('borderColor', $this->borderColor, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->sizeNormalized) {
            $res['SizeNormalized'] = $this->sizeNormalized;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
        }
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textLayerContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['SizeNormalized'])) {
            $model->sizeNormalized = $map['SizeNormalized'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
        }
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }

        return $model;
    }
}
