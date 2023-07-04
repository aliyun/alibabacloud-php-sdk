<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag keys of the NAT gateway. You can specify up to 20 tag keys.
     *
     * Each tag key cannot exceed 64 characters in length, and cannot start with `aliyun` or `acs:`. It cannot contain `http://` or `https://`.
     * @example KeyTest
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag values of the NAT gateway. You can specify up to 20 tag values.
     *
     * The tag value cannot exceed 128 characters in length, and cannot start with `aliyun` or `acs:`. The value cannot contain `http://` or `https://`.
     * @example valueTest
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
