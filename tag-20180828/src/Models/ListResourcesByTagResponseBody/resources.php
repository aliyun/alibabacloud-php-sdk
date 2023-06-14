<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagResponseBody;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagResponseBody\resources\tags;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example vpc-wz9pifyuw26esxd05****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The information of the tags.
     *
     * This parameter is returned only if the `IncludeAllTags` parameter is set to `True`.
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'resourceId' => 'ResourceId',
        'tags'       => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
