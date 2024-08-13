<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysResponseBody;

use AlibabaCloud\Tea\Model;

class tagKeys extends Model
{
    /**
     * @description The total number of tag values that correspond to each key.
     *
     * @example 1
     *
     * @var int
     */
    public $tagCount;

    /**
     * @description The tag key.
     *
     * @example a
     *
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagCount' => 'TagCount',
        'tagKey'   => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
