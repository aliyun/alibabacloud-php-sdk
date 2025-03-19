<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder\moduleInstance;

use AlibabaCloud\Tea\Model;

class moduleAttrs extends Model
{
    /**
     * @description 属性类型，可选值：
     *
     * 1. 1：商品属性
     * 2. 2：规格属性
     * 3. 3：模块属性
     * 4. 4：外部参数（备用）
     *
     * @example 3
     *
     * @var int
     */
    public $type;

    /**
     * @description Name
     *
     * @example 20GB
     *
     * @var string
     */
    public $name;

    /**
     * @description Module attr code
     *
     * @example rds_storage
     *
     * @var string
     */
    public $code;

    /**
     * @description Value
     *
     * @example 20
     *
     * @var string
     */
    public $value;

    /**
     * @description Unit
     *
     * @example GB
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'type' => 'Type',
        'name' => 'Name',
        'code' => 'Code',
        'value' => 'Value',
        'unit' => 'Unit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleAttrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
