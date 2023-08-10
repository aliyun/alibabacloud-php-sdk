<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The token that is used to retrieve the next page.
     *
     * @example 60
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource IDs. You can specify a maximum number of 50 resource IDs.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example BIGDATA
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags. You can specify a maximum number of 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'nextToken'    => 'nextToken',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tag'          => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
