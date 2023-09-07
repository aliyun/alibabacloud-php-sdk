<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData;

use AlibabaCloud\Tea\Model;

class styles extends Model
{
    /**
     * @var bool
     */
    public $bold;

    /**
     * @var float
     */
    public $charScale;

    /**
     * @var string
     */
    public $color;

    /**
     * @var bool
     */
    public $deleteLine;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var bool
     */
    public $italic;

    /**
     * @var int
     */
    public $styleId;

    /**
     * @var bool
     */
    public $underline;
    protected $_name = [
        'bold'       => 'Bold',
        'charScale'  => 'CharScale',
        'color'      => 'Color',
        'deleteLine' => 'DeleteLine',
        'fontName'   => 'FontName',
        'fontSize'   => 'FontSize',
        'italic'     => 'Italic',
        'styleId'    => 'StyleId',
        'underline'  => 'Underline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bold) {
            $res['Bold'] = $this->bold;
        }
        if (null !== $this->charScale) {
            $res['CharScale'] = $this->charScale;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->deleteLine) {
            $res['DeleteLine'] = $this->deleteLine;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->italic) {
            $res['Italic'] = $this->italic;
        }
        if (null !== $this->styleId) {
            $res['StyleId'] = $this->styleId;
        }
        if (null !== $this->underline) {
            $res['Underline'] = $this->underline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return styles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bold'])) {
            $model->bold = $map['Bold'];
        }
        if (isset($map['CharScale'])) {
            $model->charScale = $map['CharScale'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['DeleteLine'])) {
            $model->deleteLine = $map['DeleteLine'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['Italic'])) {
            $model->italic = $map['Italic'];
        }
        if (isset($map['StyleId'])) {
            $model->styleId = $map['StyleId'];
        }
        if (isset($map['Underline'])) {
            $model->underline = $map['Underline'];
        }

        return $model;
    }
}
