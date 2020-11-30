<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListTagKeysResponse;

use AlibabaCloud\Tea\Model;

class tagKeys extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var int
     */
    public $tagCount;
    protected $_name = [
        'tagKey'   => 'TagKey',
        'tagCount' => 'TagCount',
    ];

    public function validate()
    {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagCount', $this->tagCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }

        return $model;
    }
}
