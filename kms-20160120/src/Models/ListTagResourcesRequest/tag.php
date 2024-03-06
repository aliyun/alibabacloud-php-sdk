<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. A tag consists of a key-value pair.
     *
     * >  The key cannot start with aliyun or acs:.
     * @example disk-encryption
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. A tag consists of a key-value pair.
     *
     * You can enter up to 20 tags. Enter multiple tags in the `[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},..]` format.
     * @example true
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
