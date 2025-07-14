<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key. Valid values of N: 1 to 20. The tag key cannot be an empty string. It can be up to 64 characters in length, and can neither contain `http://` or `https://` nor `acs:` or `aliyun`.
     *
     * You can filter no more than 1,000 host groups, regardless of how many tags are used. To query more than 1,000 host groups, call the [ListTagResources](https://help.aliyun.com/document_detail/110425.html) API operation.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value. Valid values of N: 1 to 20. The tag value cannot be an empty string. It can be up to 64 characters in length and cannot contain `http://` or `https://`.
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
