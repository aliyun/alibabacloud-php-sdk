<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysResponseBody;

use AlibabaCloud\Tea\Model;

class tagKeys extends Model
{
    /**
     * @description The total number of tag keys.
     *
     * @example 2
     *
     * @var int
     */
    public $tagCount;

    /**
     * @description The name of the tag key.
     *
     * @example key2
     *
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagCount' => 'TagCount',
        'tagKey' => 'TagKey',
    ];

    public function validate() {}

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
