<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute\values;
use AlibabaCloud\Tea\Model;

class attribute extends Model
{
    /**
     * @description The code of the attribute.
     *
     * @example DBInstanceStorage
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the attribute.
     *
     * @example Capacity
     *
     * @var string
     */
    public $name;

    /**
     * @description The unit of the attribute.
     *
     * @example GB
     *
     * @var string
     */
    public $unit;

    /**
     * @description The attribute values.
     *
     * @var values
     */
    public $values;
    protected $_name = [
        'code'   => 'Code',
        'name'   => 'Name',
        'unit'   => 'Unit',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
