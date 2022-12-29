<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag.
     *
     * @example newKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The values of the tags.
     *
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'tagKey'    => 'TagKey',
        'tagValues' => 'TagValues',
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
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
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
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }

        return $model;
    }
}
