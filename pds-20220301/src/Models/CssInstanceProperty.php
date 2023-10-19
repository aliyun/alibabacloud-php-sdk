<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CssInstanceProperty extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $globalKey;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'code'      => 'code',
        'globalKey' => 'globalKey',
        'name'      => 'name',
        'unit'      => 'unit',
        'value'     => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->globalKey) {
            $res['globalKey'] = $this->globalKey;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CssInstanceProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['globalKey'])) {
            $model->globalKey = $map['globalKey'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
