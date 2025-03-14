<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of the resource. You can specify up to 20 tag keys.
     *
     * The tag key cannot be an empty string. The tag key must be 1 to 64 characters in length and cannot start with `aliyun` or `acs:`. The tag key cannot contain `http://` or `https://`.
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the resource. You can specify up to 20 tag values. The tag value cannot be an empty string.
     *
     * The tag value can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. The tag value cannot contain `http://` or `https://`.
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
