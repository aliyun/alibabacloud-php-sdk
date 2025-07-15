<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Tea\Model;

class textLayerContent extends Model
{
    /**
     * @description The color of the text border. Valid values: **0x000000 to 0xffffff**. If the value of this parameter is **""**, this parameter does not take effect.
     *
     * @example 0x000000
     *
     * @var string
     */
    public $borderColor;

    /**
     * @description The normalized value of the width of the text border. The value of this parameter equals the border width divided by the font size.****
     *
     * The maximum width of the text border is **16**, even if the border width calculated based on this parameter is greater than **16**.
     *
     * @example 0
     *
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @description The color of the text. Valid values: **0x000000 to 0xffffff**.
     *
     * @example 0xff0000
     *
     * @var string
     */
    public $color;

    /**
     * @description The font of the text, which is specified by the system. Valid values:
     *
     *   **KaiTi**
     *   **AlibabaPuHuiTi-Regular**
     *   **AlibabaPuHuiTi-Bold**
     *   **NAlibabaPuHuiTi-Light**
     *   **NotoSansHans-Regular**
     *   **NotoSansHans-Bold**
     *   **NotoSansHans-Light**
     ****
     * @example KaiTi
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The normalized value of the font size of the text.
     *
     * The value of this parameter equals the font size divided by the output height.**** The maximum font size of the text is **1,024**, even if the font size calculated based on this parameter is greater than **1,024**. If the value of this parameter is **-1**, this parameter does not take effect.
     *
     * @example 16
     *
     * @var float
     */
    public $sizeNormalized;

    /**
     * @description The content of the text.
     *
     * @example hello world
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'borderColor' => 'BorderColor',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'color' => 'Color',
        'fontName' => 'FontName',
        'sizeNormalized' => 'SizeNormalized',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
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
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
