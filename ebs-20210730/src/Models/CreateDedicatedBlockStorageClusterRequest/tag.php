<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDedicatedBlockStorageClusterRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N used for exact search of EBS resources. The tag key must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     * The `Tag.N` parameter pair (Tag.N.Key and Tag.N.Value) is used for exact search of EBS resources that have specified tags added. Each tag is a key-value pair.
     *
     *   If you specify only `Tag.N.Key`, all EBS resources whose tags contain the specified tag key are returned.
     *   If you specify only `Tag.N.Value`, the `InvalidParameter.TagValue` error is returned.
     *   If you specify multiple tag key-value pairs at the same time, only EBS resources that match all tag key-value pairs are returned.
     *
     * @example tag-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N to add to the resource. Valid values of N: 1 to 20. The tag value can be an empty string. The tag value can be up to 128 characters in length and cannot start with `acs:` or contain `http://` or `https://`.
     *
     * @example tag-value
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
