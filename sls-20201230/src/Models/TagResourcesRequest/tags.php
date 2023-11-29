<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag. The key must meet the following requirements:
     *
     *   The key must be `1 to 128` characters in length.
     *   The key cannot contain `"http://"` or `"https://"`.
     *   The key cannot start with `"acs:"` or `"aliyun"`.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. The value must meet the following requirements:
     *
     *   The value must be `1 to 128` characters in length.
     *   The value cannot contain `"http://"` or `"https://"`.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
