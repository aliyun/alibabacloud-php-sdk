<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag.
     *
     * The key cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     * It can be up to 64 characters in length.
     * The key cannot be an empty string.
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag.
     *
     * - The value can be an empty string.
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
