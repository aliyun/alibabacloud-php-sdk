<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to replace the original tags added to the resources. Valid values:
     *
     *   True: replaces the original tags.
     *   False|Null: appends the specified one or more tags to the original tags. If a new tag has the same key but a different value from an original tag, the new tag replaces the original tag.
     *
     * @example true
     *
     * @var bool
     */
    public $overWrite;

    /**
     * @description The resource IDs, which are zone IDs. You can specify **1 to 50** IDs.
     *
     * This parameter is required.
     * @example 97fe9321a476d0861f624d3f738dcc38
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example ZONE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags to add to the resources.
     *
     * This parameter is required.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'lang'         => 'Lang',
        'overWrite'    => 'OverWrite',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->overWrite) {
            $res['OverWrite'] = $this->overWrite;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OverWrite'])) {
            $model->overWrite = $map['OverWrite'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
