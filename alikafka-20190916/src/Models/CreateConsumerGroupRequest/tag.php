<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key.
     *
     *   You must specify this parameter.
     *   The tag key can be up to 128 characters in length and cannot start with acs: or aliyun. It cannot contain `http://` or `https://`.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     *   You can leave this parameter empty.
     *   The tag value can be up to 128 characters in length and cannot start with acs: or aliyun. It cannot contain `http://` or `https://`.
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
