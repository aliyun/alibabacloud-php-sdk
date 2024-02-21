<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N to add to the resource. You can specify up to 20 tag keys. The tag key cannot be an empty string.
     *
     * The tag key can be up to 64 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The tag key must start with a letter but cannot start with `aliyun` or `acs:`. The tag key cannot contain `http://` or `https://`.
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N to add to the resource. You can specify up to 20 tag values. The tag value can be an empty string.
     *
     * The tag value can be up to 128 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The tag value must start with a letter but cannot start with `aliyun` or `acs:`. The tag value cannot contain `http://` or `https://`.
     * @example FinanceJoshua
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
