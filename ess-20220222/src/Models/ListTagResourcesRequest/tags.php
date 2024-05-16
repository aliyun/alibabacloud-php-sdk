<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag. The key is used to perform an exact match of Auto Scaling resources. The key must be 1 to 128 characters in length.
     *
     * `Tags` is used to perform an exact match of Auto Scaling resources to which the specified tags are added. Specify a tag in the key-value pair format.
     *
     *   If you specify only `Tags.Key`, all resources whose tags contain the specified tag key are returned.
     *   If you specify only `Tags.Value`, the `MissingParameter.TagKey` error is reported.
     *   If you specify multiple key-value pairs at the same time, only Auto Scaling resources that match all the tag keys and tag values are returned.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. The value is used to perform an exact match of Auto Scaling resources. The value can be up to 128 characters in length.
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
