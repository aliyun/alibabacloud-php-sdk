<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of tag N of the managed instance. Valid values of N: 1 to 20. The tag key cannot be an empty string.
     *
     * The tag key can be up to 64 characters in length and cannot contain `http://` or `https://`. The tag key cannot start with `acs:` or `aliyun`.
     * @example TestKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of tag N of the managed instance. Valid values of N: 1 to 20. The tag value can be an empty string.
     *
     * The tag value can be up to 128 characters in length and cannot contain `http://` or `https://`.
     * @example TestValue
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
