<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N. Valid values of N: 1 to 20.
     *
     * >
     *
     *   The value can be up to 128 characters in length but cannot be an empty string.
     *
     *   The value cannot start with **aliyun** or **acs:**. The value cannot contain **http://** or **https://**.
     *
     * @example operation
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N.\
     * >
     *
     *   The value can be up to 128 characters in length or an empty string.
     *
     *   The value cannot start with **aliyun** or **acs:**. The value cannot contain **http://** or **https://**.
     *
     * @example operation_test
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
