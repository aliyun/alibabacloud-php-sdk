<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\Tea\Model;

class multipleData extends Model
{
    /**
     * @description The font color, which is an RGBA value.
     *
     * @example #FFA800
     *
     * @var string
     */
    public $color;

    /**
     * @description The name of the data type.
     *
     * @example Safety
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the data.
     *
     * @example safe
     *
     * @var string
     */
    public $type;

    /**
     * @description The attribute value.
     *
     * @example 0
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'color' => 'Color',
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multipleData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
