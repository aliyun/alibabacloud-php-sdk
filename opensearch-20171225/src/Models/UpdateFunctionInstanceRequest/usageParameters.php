<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest;

use AlibabaCloud\Tea\Model;

class usageParameters extends Model
{
    /**
     * @description The name of the parameter.
     *
     * @example allow_dict_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the parameter.
     *
     * @example 123
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'name',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
