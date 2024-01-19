<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N. The tag key must be 1 to 64 characters in length. Valid values of N: 1 to 20.
     *
     * Tag.N is used for exact match of SMC resources to which the tag is attached. Tag N consists of a key-value pair.
     *
     *   Tag keys and values are case-sensitive.
     *   If you set only the Tag.N.Key parameter, all resources to which the specified tags are attached are returned.
     *   If you set only the Tag.N.Value parameter, the error message InvalidParameter.TagValue is returned.
     *   If you specify multiple tag key-value pairs at a time, only SMC resources that match all tag key-value pairs are returned.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N. The value must be 1 to 64 characters in length. Valid values of N: 1 to 20.
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
