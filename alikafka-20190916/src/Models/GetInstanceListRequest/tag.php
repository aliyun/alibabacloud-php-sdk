<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key.
     *
     *   If you leave this parameter empty, the keys of all tags are matched.
     *   The tag key can be up to 128 characters in length. It cannot start with aliyun or acs: and cannot contain `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     *   If you leave Key empty, you must also leave this parameter empty. If you leave this parameter empty, the values of all tags are matched.
     *   The tag value can be up to 128 characters in length. It cannot start with aliyun or acs: and cannot contain `http://` or `https://`.
     *
     * @example test
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
