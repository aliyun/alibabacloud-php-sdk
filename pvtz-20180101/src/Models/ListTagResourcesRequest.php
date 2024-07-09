<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The language of the values for specific response parameters. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example 234235354
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource IDs, which are zone IDs. You can specify up to 50 zone IDs.
     *
     * @example 97fe9321a476d0861f624d3f738dcc38
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Valid value: ZONE.
     *
     * This parameter is required.
     * @example ZONE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The number of entries per page. Valid values: `1 to 200`. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The tags added to the resources.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'lang'         => 'Lang',
        'nextToken'    => 'NextToken',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'size'         => 'Size',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
