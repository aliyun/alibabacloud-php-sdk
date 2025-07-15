<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key. The tag key cannot be an empty string.
     *
     * It can be at most 64 characters in length, and cannot contain `http://` or `https://`. It cannot start with `aliyun` or `acs:`.
     *
     * You can specify at most 20 tag keys in each call.
     *
     * @example TagKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * The tag value can be an empty string and cannot exceed 128 characters in length. It cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     *
     * Each tag key corresponds to one tag value. You can specify at most 20 tag values in each call.
     *
     * @example TagValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

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
