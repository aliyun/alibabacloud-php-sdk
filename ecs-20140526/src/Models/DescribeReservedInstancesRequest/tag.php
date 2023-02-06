<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N of the reserved instance. Valid values of N: 1 to 20. The tag key cannot be an empty string. It can be up to 128 characters in length. It cannot start with aliyun or acs: or contain http:// or https://.
     *
     * If a single tag is specified to query resources, up to 1,000 resources that are bound with this tag can be displayed in the response. If multiple tags are specified to query resources, up to 1,000 resources that are bound with all these tags can be displayed in the response. To query more than 1,000 resources that are bound with specified tags, call the [ListTagResources](~~110425~~) operation.
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N of the reserved instance. Valid values of N: 1 to 20. The tag value can be an empty string. It can be up to 128 characters in length. It cannot start with acs: or contain http:// or https://.
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
