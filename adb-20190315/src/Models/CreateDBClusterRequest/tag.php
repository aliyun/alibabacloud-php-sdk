<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N to add to the cluster. You can use tags to filter clusters. Valid values of N: 1 to 20. The values that you specify for N must be unique and consecutive integers that start from 1. Each value of `Tag.N.Key` is paired with a value of `Tag.N.Value`.
     *
     * >  The tag key can be up to 64 characters in length and cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     * @example tag1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N to add to the cluster. You can use tags to filter clusters. Valid values of N: 1 to 20. The values that you specify for N must be unique and consecutive integers that start from 1. Each value of `Tag.N.Key` is paired with a value of `Tag.N.Value`.
     *
     * >  The tag value can be up to 64 characters in length and cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     * @example test1
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
