<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N used for exact search of ECS resources. The tag key must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     * Methods of using the `Tag.N` parameter pair (Tag.N.Key and Tag.N.Value):
     *
     *   Method 1: Use this parameter pair for exact search of ECS resources that have specified tags added. Each tag is a key-value pair.
     *
     *   If you specify only `Tag.N.Key`, all ECS resources whose tags contain the specified tag key are returned.
     *   If you specify only `Tag.N.Value`, the `InvalidParameter.TagValue` error is returned.
     *   If you specify multiple tag key-value pairs, only the ECS resources that have all these tag key-value pairs added are returned.
     *
     *   Method 2: Use this parameter pair to query resource information of a non-default resource group. Set `Tag.1.Key` to `acs:rm:rgId` and `Tag.1.Value` to the ID of a resource group.
     *
     *   If you set `Tag.1.Key` to `acs:rm:rgId`, you must set `Tag.1.Value` to the ID of a non-default resource group. If you set Tag.1.Value to the ID of the default resource group, an error message is returned.
     *   If you set `Tag.1.Key` to `acs:rm:rgId`, you cannot specify other Tag.N parameter pairs. If you specify multiple `Tag.N` parameter pairs to query resource groups and resource tags at the same time, an error message is returned.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N used for exact search of ECS resources. The tag value must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     * > When Tag.1.Key is set to `acs:rm:rgId`, you can set Tag.1.Value only to the ID of a non-default resource group.
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
