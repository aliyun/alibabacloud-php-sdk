<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of tag N of the instance. The tag key cannot be an empty string.
     *
     * > It can be up to 64 characters in length. It cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     *
     * @example TagKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * > It can be up to 128 characters in length. It cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`. The tag value can be an empty string.
     *
     * @example TagValue
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
