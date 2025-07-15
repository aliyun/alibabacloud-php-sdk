<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\speechConfig;

use AlibabaCloud\Tea\Model;

class asrConfig extends Model
{
    /**
     * @var string
     */
    public $alignment;

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
     * @example 0
     *
     * @var string
     */
    public $fontSize;

    /**
     * @example 0
     *
     * @var string
     */
    public $spacing;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'alignment' => 'Alignment',
        'font' => 'Font',
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'spacing' => 'Spacing',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['Alignment'] = $this->alignment;
        }
        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alignment'])) {
            $model->alignment = $map['Alignment'];
        }
        if (isset($map['Font'])) {
            $model->font = $map['Font'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['Spacing'])) {
            $model->spacing = $map['Spacing'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
