<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N that is added to the cluster. You can use tags to filter clusters. A tag is a key-value pair. You can specify up to 20 tags in one request. The letter N specifies the sequence number of each key-value pair and must be unique. The values of N must be consecutive integers that start from 1. Each value of `Tag.N.Key` is paired with a value of `Tag.N.Value`.
     *
     * > The tag key can be up to 64 characters in length and cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     * @example tag1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N that is added to the cluster. You can use tags to filter clusters. A tag is a key-value pair. You can specify up to 20 tags in one request. The letter N specifies the sequence number of each key-value pair and must be unique. The values of N must be consecutive integers that start from 1. Each value of `Tag.N.Key` is paired with a value of `Tag.N.Value`.
     *
     * > The tag key can be up to 64 characters in length and cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
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
