<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key. If you configure this parameter, you must also configure the **Value** parameter.****
     *   The value of this parameter cannot be an empty string.
     *   A tag key must be 1 to 128 characters in length and cannot contain `http://` or `https://`. A tag key cannot start with `acs:` or `aliyun`.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to attach to the resource. If you configure this parameter, you must also configure the **Key** parameter.****
     *   The value of this parameter can be an empty string.
     *   A tag value must be 1 to 128 characters in length and cannot contain `http://` or `https://`. A tag value cannot start with `acs:` or `aliyun`.
     *
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
