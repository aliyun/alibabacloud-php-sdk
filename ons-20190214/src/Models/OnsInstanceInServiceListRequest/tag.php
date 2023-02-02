<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of a tag that is attached to the instances you want to query. This parameter is not required. If you configure this parameter, you must also configure the **Tag.N.Key** parameter.**** If you include the Key and Value parameters in a request, this operation queries only the instances that use the specified tags. If you do not include these parameters in a request, this operation queries all instances that you can access.
     *
     *   The value of this parameter cannot be an empty string.
     *   The tag key can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     *
     * @example CartService
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of a tag that is attached to the instances you want to query. This parameter is not required. If you configure this parameter, you must also configure the **Tag.N.Key** parameter.**** If you include the Key and Value parameters in a request, this operation queries only the instances that use the specified tags. If you do not include these parameters in a request, this operation queries all instances that you can access.
     *
     *   The value of this parameter can be an empty string.
     *   The tag key can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     *
     * @example SericeA
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
