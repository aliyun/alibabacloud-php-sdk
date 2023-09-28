<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\LaunchProductRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key of the custom tag.
     *
     * The tag key must be 1 to 128 characters in length and cannot contain `http://` or `https://`. It cannot start with `acs:` or `aliyun`.
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the custom tag.
     *
     * The tag value can be up to 128 characters in length and cannot start with `acs:`. It cannot contain `http://` or `https://`.
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
