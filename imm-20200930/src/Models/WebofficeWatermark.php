<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class WebofficeWatermark extends Model
{
    /**
     * @description 水印类型，目前仅支持文字水印，0: 无水印；1: 文字水印
     *
     * @var int
     */
    public $type;

    /**
     * @description 水印文字
     *
     * @var string
     */
    public $value;

    /**
     * @description 旋转角度
     *
     * @var float
     */
    public $rotate;

    /**
     * @description 垂直间距
     *
     * @var int
     */
    public $vertical;

    /**
     * @description 水平间距
     *
     * @var int
     */
    public $horizontal;

    /**
     * @description 字体样式
     *
     * @var string
     */
    public $font;

    /**
     * @description 字体颜色
     *
     * @var string
     */
    public $fillStyle;
    protected $_name = [
        'type'       => 'Type',
        'value'      => 'Value',
        'rotate'     => 'Rotate',
        'vertical'   => 'Vertical',
        'horizontal' => 'Horizontal',
        'font'       => 'Font',
        'fillStyle'  => 'FillStyle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
        }
        if (null !== $this->horizontal) {
            $res['Horizontal'] = $this->horizontal;
        }
        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }
        if (null !== $this->fillStyle) {
            $res['FillStyle'] = $this->fillStyle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebofficeWatermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }
        if (isset($map['Horizontal'])) {
            $model->horizontal = $map['Horizontal'];
        }
        if (isset($map['Font'])) {
            $model->font = $map['Font'];
        }
        if (isset($map['FillStyle'])) {
            $model->fillStyle = $map['FillStyle'];
        }

        return $model;
    }
}
