<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponseBody\invalidProductTags;

use AlibabaCloud\Tea\Model;

class productTag extends Model
{
    /**
     * @description The key of the tag.
     *
     * @example room
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag.
     *
     * @example 123$
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
