<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that you want to remove. The tag key can be up to 128 characters in length, and cannot contain `http://` or `https://`. The tag key cannot start with `acs:` or `aliyun`.
     *
     * @example env
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to remove. The tag value can be up to 128 characters in length, and cannot contain `http://` or `https://`. The tag value cannot start with `acs:` or `aliyun`.
     *
     * @example product
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
