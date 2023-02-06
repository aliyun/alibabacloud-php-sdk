<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N to be bound to the new snapshot. The tag key cannot be an empty string. It can be up to 128 characters in length and cannot contain http:// or https://. It cannot start with acs: or aliyun.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N to be bound to the new snapshot. The tag value can be an empty string. It can be up to 128 characters in length and cannot contain http:// or https://. It cannot start with acs: or aliyun.
     *
     * @example TestValue
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
