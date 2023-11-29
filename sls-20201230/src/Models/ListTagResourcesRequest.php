<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The IDs of the resources for which you want to query tags. You must specify at least one of resourceId and tags.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resource. Set the value to project.
     *
     * @example project
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that you want to use to filter resources based on exact match. Each tag is a key-value pair. You must specify at least one of resourceId and tags.
     *
     * You can enter up to 20 tags.
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tags'         => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
