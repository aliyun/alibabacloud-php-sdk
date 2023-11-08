<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag keys.
     *
     * The following limits apply:
     *
     *   The key of tag N cannot be an empty string.
     *   Valid values of N: 1 to 20.
     *   The tag key can be up to 128 characters in length.
     *   The tag key cannot start with `aliyun` or `acs:`.
     *   The tag key cannot contain `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag values.
     *
     * The following limits apply:
     *
     *   The value of tag N cannot be an empty string.
     *   Valid values of N: 1 to 20.
     *   The tag value can be up to 128 characters in length.
     *   The tag value cannot contain `http://` or `https://`.
     *
     * @example yahaha
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
     * @return tag
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
