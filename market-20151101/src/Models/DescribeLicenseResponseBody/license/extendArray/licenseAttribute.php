<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license\extendArray;

use AlibabaCloud\Tea\Model;

class licenseAttribute extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $code;

    /**
     * @example -
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
     * @return licenseAttribute
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
