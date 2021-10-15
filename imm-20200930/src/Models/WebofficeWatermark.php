<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class WebofficeWatermark extends Model
{
    /**
     * @description 字体颜色
     *
     * @var string
     */
    public $fillStyle;

    /**
     * @description 字体样式
     *
     * @var string
     */
    public $font;

    /**
     * @description 水平间距
     *
     * @var int
     */
    public $horizontal;

    /**
     * @description 旋转角度
     *
     * @var float
     */
    public $rotate;

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
     * @description 垂直间距
     *
     * @var int
     */
    public $vertical;
    protected $_name = [
        'fillStyle'  => 'FillStyle',
        'font'       => 'Font',
        'horizontal' => 'Horizontal',
        'rotate'     => 'Rotate',
        'type'       => 'Type',
        'value'      => 'Value',
        'vertical'   => 'Vertical',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fillStyle) {
            $res['FillStyle'] = $this->fillStyle;
        }
        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }
        if (null !== $this->horizontal) {
            $res['Horizontal'] = $this->horizontal;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
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
        if (isset($map['FillStyle'])) {
            $model->fillStyle = $map['FillStyle'];
        }
        if (isset($map['Font'])) {
            $model->font = $map['Font'];
        }
        if (isset($map['Horizontal'])) {
            $model->horizontal = $map['Horizontal'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }

        return $model;
    }
}
