<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class WebofficeWatermark extends Model
{
    /**
     * @example rgba(192, 192, 192, 0.6)
     *
     * @var string
     */
    public $fillStyle;

    /**
     * @example bold 20px Serif
     *
     * @var string
     */
    public $font;

    /**
     * @var int
     */
    public $horizontal;

    /**
     * @var float
     */
    public $rotate;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
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
