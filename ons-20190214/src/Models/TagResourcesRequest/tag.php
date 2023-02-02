<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that you want to attach to the specified resource. If you configure this parameter, you must also configure the **Tag.N.Key** parameter.****
     *
     *   The value of N can be an integer value from 1 to 20.
     *   The value of this parameter cannot be an empty string.
     *   The tag key can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to attach to the specified resource. If you configure this parameter, you must also configure the **Tag.N.Key** parameter.****
     *
     *   The value of N can be an integer value from 1 to 20.
     *   The value of this parameter can be an empty string.
     *   The tag key can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
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
