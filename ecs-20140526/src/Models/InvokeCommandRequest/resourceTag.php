<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandRequest;

use AlibabaCloud\Tea\Model;

class resourceTag extends Model
{
    /**
     * @description The key of tag N that is used to filter instances.
     *
     * Take note of the following items:
     *
     *   You can specify this parameter or the InstanceId parameter, but not both.
     *   Valid values of N: 1 to 10. The tag key cannot be an empty string.
     *   The number of instances with the tag added cannot exceed the value specified by InstanceId.N. If the number of instances exceeds the limit, we recommend that you also specify a batch tag such as batch: b1 to filter the instances in separate batches.
     *   The tag key can be up to 64 characters in length. It cannot start with acs: or aliyun, or contain http:// or https://.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N that is used to filter instances.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 to 10.
     *   The tag value can be an empty string.
     *   The tag key can be up to 128 characters in length and cannot contain http:// or https://.
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
     * @return resourceTag
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
