<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of the instance. Valid values of N: **1** to **20**.
     *
     *   The key cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     *   It can be up to 64 characters in length.
     *   It cannot be an empty string.
     *
     * @example testdatabase
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the instance. Valid values of N: **1** to **20**.
     *
     *   The value cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     *   The value can be up to 128 characters in length.
     *   It can be an empty string.
     *
     * @example apitest
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
