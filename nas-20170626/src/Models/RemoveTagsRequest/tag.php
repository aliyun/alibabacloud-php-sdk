<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key (TagKey) of Tag N. Each tag that you want to remove includes a TagKey and TagValue. You can specify 1 to 10 tags at a time. A TagKey cannot be an empty string, but a TagValue can be an empty string.
     *
     * @example keyN
     *
     * @var string
     */
    public $key;

    /**
     * @description The value (TagValue) of Tag N. Each tag that you want to remove includes a TagKey and TagValue. You can specify a maximum of 5 tags at a time. A TagKey cannot be an empty string, but a TagValue can be an empty string.
     *
     * @example valueN
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
