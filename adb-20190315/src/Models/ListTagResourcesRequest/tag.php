<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. You can specify multiple tag keys. The tag key cannot be an empty string. Valid values of N: 1 to 20.
     *
     * > You must specify at least one of the following parameters: ResourceId.N and Tag.N.Key.
     * @example testkey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. You can specify multiple tag values. The tag value can be an empty string. Valid values of N: 1 to 20.
     *
     * @example testvalue1
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
