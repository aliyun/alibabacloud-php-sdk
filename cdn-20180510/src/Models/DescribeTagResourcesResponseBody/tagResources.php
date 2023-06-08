<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesResponseBody\tagResources\tag;
use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example example.com
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The key-value pair of the tag.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceId' => 'ResourceId',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
     * @return tagResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
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
