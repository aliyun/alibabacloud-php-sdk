<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandShrinkRequest;

use AlibabaCloud\Tea\Model;

class resourceTag extends Model
{
    /**
     * @description The key of tag N of the instance.
     *
     * Take note of the following items:
     *
     *   This parameter and InstanceId.N are mutually exclusive.
     *   Valid values of N: 1 to 10. The tag key cannot be an empty string.
     *   The number of instances that have the specified tags cannot exceed 50. If more than 50 instances have the specified tags, we recommend that you use batch tags such as batch: b1 to group the instances into batches of up to 50 instances.
     *   The tag key can be up to 64 characters in length. It cannot start with aliyun or acs: and cannot contain http:// or https://.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N of the instance.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 to 10.
     *   The tag value can be an empty string.
     *   The tag value can be up to 128 characters in length and cannot contain http:// or https://.
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
