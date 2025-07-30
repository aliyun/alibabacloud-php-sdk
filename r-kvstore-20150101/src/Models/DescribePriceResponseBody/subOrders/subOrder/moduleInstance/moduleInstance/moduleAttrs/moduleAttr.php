<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\moduleAttrs;

use AlibabaCloud\Tea\Model;

class moduleAttr extends Model
{
    /**
     * @description The attribute code.
     *
     * @example ****
     *
     * @var string
     */
    public $code;

    /**
     * @description The attribute name.
     *
     * @example ****
     *
     * @var string
     */
    public $name;

    /**
     * @description The attribute type.
     *
     * @example ****
     *
     * @var int
     */
    public $type;

    /**
     * @description The attribute value.
     *
     * @example ****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return moduleAttr
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
