<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that is added to the resource. You can specify at most 20 tag keys.
     *
     * The key cannot exceed 128 characters in length. The key cannot start with `aliyun` or `acs:` and cannot contain `http://` or `https://`.
     *
     * > When you call this operation, the **Tag.N.Key** parameter is required and cannot be an empty string.
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that is added to the resource. You can specify at most 20 tag values.
     *
     * The tag value cannot exceed 128 characters in length. The key cannot start with `aliyun` or `acs:`. The key cannot contain `http://` or `https://`.
     *
     * > When you call this operation, the **Tag.N.Value** parameter is required and can be an empty string.
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
