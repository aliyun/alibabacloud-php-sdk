<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig\billModuleProperties;

use AlibabaCloud\Tea\Model;

class billModuleProperties extends Model
{
    /**
     * @var string
     */
    public $attrApiCode;

    /**
     * @var string
     */
    public $moduleApiCode;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'attrApiCode'   => 'AttrApiCode',
        'moduleApiCode' => 'ModuleApiCode',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrApiCode) {
            $res['AttrApiCode'] = $this->attrApiCode;
        }
        if (null !== $this->moduleApiCode) {
            $res['ModuleApiCode'] = $this->moduleApiCode;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billModuleProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttrApiCode'])) {
            $model->attrApiCode = $map['AttrApiCode'];
        }
        if (isset($map['ModuleApiCode'])) {
            $model->moduleApiCode = $map['ModuleApiCode'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
