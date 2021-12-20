<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketTagsResponseBody extends Model
{
    /**
     * @var TagSet
     */
    public $tagSet;
    protected $_name = [
        'tagSet' => 'TagSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagSet) {
            $res['TagSet'] = null !== $this->tagSet ? $this->tagSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagSet'])) {
            $model->tagSet = TagSet::fromMap($map['TagSet']);
        }

        return $model;
    }
}
