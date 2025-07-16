<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InsertDropDownListRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example #FF0000
     *
     * @var string
     */
    public $color;

    /**
     * @description This parameter is required.
     *
     * @example A
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'color' => 'Color',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
