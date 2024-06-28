<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The code of the parameter n. Valid values of n: 1 to 100. Multiple parameters are concatenated in the order of n.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $code;

    /**
     * @description The value of the parameter n. Valid values of n: 1 to 100.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code'  => 'Code',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
