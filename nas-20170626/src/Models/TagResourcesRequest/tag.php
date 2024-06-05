<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N to add to the resource.
     *
     * Limits:
     *
     *   The tag key cannot be left empty.
     *   Valid values of N: 1 to 20.
     *   The tag key must be 1 to 128 characters in length.
     *   The tag key cannot start with `aliyun` or `acs:`.
     *   The tag key cannot contain `http://` or `https://`.
     *
     * This parameter is required.
     * @example nastest
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N to add to the resource.
     *
     * Limits:
     *
     *   Valid values of N: 1 to 20.
     *   The tag value must be 1 to 128 characters in length.
     *   The tag value cannot start with `aliyun` or `acs:`.
     *   The tag value cannot contain `http://` or `https://`.
     *
     * This parameter is required.
     * @example filetest
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
