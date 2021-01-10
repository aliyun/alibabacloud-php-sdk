<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Tea\Model;

class textLayerContent extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @var string
     */
    public $text;

    /**
     * @var float
     */
    public $sizeNormalized;

    /**
     * @var string
     */
    public $fontName;
    protected $_name = [
        'color'                 => 'Color',
        'borderColor'           => 'BorderColor',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'text'                  => 'Text',
        'sizeNormalized'        => 'SizeNormalized',
        'fontName'              => 'FontName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->sizeNormalized) {
            $res['SizeNormalized'] = $this->sizeNormalized;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
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
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['SizeNormalized'])) {
            $model->sizeNormalized = $map['SizeNormalized'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }

        return $model;
    }
}
