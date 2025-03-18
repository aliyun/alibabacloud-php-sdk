<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceRequest;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The code of the specification, which must be consistent with the value that you specify on the buy page.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The value of the specification.
     *
     * @example ""
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code' => 'code',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
