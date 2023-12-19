<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key of the backup vault. Valid values of N: 1 to 20.
     *
     *   The tag key cannot start with `aliyun` or `acs:`.
     *   The tag key cannot contain `http://` or `https://`.
     *   The tag key cannot be an empty string.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the backup vault. Valid values of N: 1 to 20.
     *
     *   The tag value cannot start with `aliyun` or `acs:`.
     *   The tag value cannot contain `http://` or `https://`.
     *   The tag value cannot be an empty string.
     *
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
     * @return tags
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
