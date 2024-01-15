<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The keys of a tag. Valid values of N: 1 to 20.\
     * You cannot enter an empty string as the parameter value. The tag key can be up to 128 characters in length and cannot contain `http://` or `https://`. The key cannot start with `aliyun` and `acs:`.
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value. Valid values of N: 1 to 20.\
     * You can enter an empty string as the parameter value. The tag value must be up to 128 characters in length and cannot contain `http://` or `https://`. The value cannot start with `acs:`.
     * @example TestValue
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
