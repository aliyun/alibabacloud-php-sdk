<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeEditUrlWatermark extends Model
{
    /**
     * @var string
     */
    public $fillstyle;

    /**
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
        'fillstyle'  => 'fillstyle',
        'font'       => 'font',
        'horizontal' => 'horizontal',
        'rotate'     => 'rotate',
        'type'       => 'type',
        'value'      => 'value',
        'vertical'   => 'vertical',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fillstyle) {
            $res['fillstyle'] = $this->fillstyle;
        }
        if (null !== $this->font) {
            $res['font'] = $this->font;
        }
        if (null !== $this->horizontal) {
            $res['horizontal'] = $this->horizontal;
        }
        if (null !== $this->rotate) {
            $res['rotate'] = $this->rotate;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->vertical) {
            $res['vertical'] = $this->vertical;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeEditUrlWatermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fillstyle'])) {
            $model->fillstyle = $map['fillstyle'];
        }
        if (isset($map['font'])) {
            $model->font = $map['font'];
        }
        if (isset($map['horizontal'])) {
            $model->horizontal = $map['horizontal'];
        }
        if (isset($map['rotate'])) {
            $model->rotate = $map['rotate'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['vertical'])) {
            $model->vertical = $map['vertical'];
        }

        return $model;
    }
}
