<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Property extends Model
{
    /**
     * @example float
     *
     * @var string
     */
    public $itemsType;

    /**
     * @example channels
     *
     * @var string
     */
    public $name;

    /**
     * @example [40, 80, 160, 320]
     *
     * @var string
     */
    public $value;

    /**
     * @example array
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'itemsType' => 'ItemsType',
        'name'      => 'Name',
        'value'     => 'Value',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemsType) {
            $res['ItemsType'] = $this->itemsType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemsType'])) {
            $model->itemsType = $map['ItemsType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
