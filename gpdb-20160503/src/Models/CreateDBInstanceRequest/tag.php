<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description Tag key. The restrictions are as follows:
     *
     * - It cannot be an empty string.
     * - It supports up to 128 characters.
     * - It cannot start with `aliyun` or `acs:`, and it cannot contain `http://` or `https://`.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description Tag value. The restrictions are as follows:
     *
     * - It can be an empty string.
     * - It supports up to 128 characters.
     * - It cannot start with `acs:`, and it cannot contain `http://` or `https://`.
     *
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

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
