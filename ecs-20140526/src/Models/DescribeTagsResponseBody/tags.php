<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody\tags\resourceTypeCount;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var resourceTypeCount
     */
    public $resourceTypeCount;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'resourceTypeCount' => 'ResourceTypeCount',
        'tagValue'          => 'TagValue',
        'tagKey'            => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = null !== $this->resourceTypeCount ? $this->resourceTypeCount->toMap() : null;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = resourceTypeCount::fromMap($map['ResourceTypeCount']);
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
