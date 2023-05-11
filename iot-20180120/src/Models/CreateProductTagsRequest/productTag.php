<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsRequest;

use AlibabaCloud\Tea\Model;

class productTag extends Model
{
    /**
     * @description The keys of product tags. Each key must be 1 to 30 characters in length, and can contain letters, digits, and periods (.).
     *
     *
     **Important** `abc` is a **key** that is reserved by IoT Platform. You cannot set a **key** to `abc`. If you set a `key` to abc, the key is automatically filtered when you query tags.
     *
     * @example room
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The values of the product tags. Each tag value must be 1 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-).
     *
     * @example TagValue
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
     * @return productTag
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
