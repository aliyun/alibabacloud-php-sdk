<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @description 查询的资源的 id 列表。resource id 与 tags 应至少存在一个。
     *
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @description 资源类型。目前取值范围：project。
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 精确查找时过滤的标签键值对。resource id 与 tags 应至少存在一个。
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'resourceIdShrink' => 'resourceId',
        'resourceType'     => 'resourceType',
        'tagsShrink'       => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIdShrink) {
            $res['resourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            $model->resourceIdShrink = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
