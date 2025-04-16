<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody\tags;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody\tags\tag\resourceTypeCount;

class tag extends Model
{
    /**
     * @var resourceTypeCount
     */
    public $resourceTypeCount;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceTypeCount' => 'ResourceTypeCount',
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        if (null !== $this->resourceTypeCount) {
            $this->resourceTypeCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = null !== $this->resourceTypeCount ? $this->resourceTypeCount->toArray($noStream) : $this->resourceTypeCount;
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = resourceTypeCount::fromMap($map['ResourceTypeCount']);
        }

        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
