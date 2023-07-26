<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N. The key must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     * You can use `Tag.N.Key and Tag.N.Value` to query AnalyticDB for PostgreSQL instances to which specific tags are bound.
     *
     *   If you specify only `Tag.N.Key`, the instances whose tags contain the specified tag keys are returned.
     *   If you specify only `Tag.N.Value`, `InvalidParameter.TagValue` is returned.
     *   If you specify multiple tag key-value pairs at a time, the instances to which all the specified tags are bound are returned.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N. The value must be 1 to 128 characters in length. Valid values of N: 1 to 20.
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
