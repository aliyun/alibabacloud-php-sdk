<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class createParameters extends Model
{
    /**
     * @description The name of the parameter.
     *
     * @example param1
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the parameter.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
