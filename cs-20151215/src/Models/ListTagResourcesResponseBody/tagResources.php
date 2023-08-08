<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources\tagResource;
use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description The labels of the resource.
     *
     * @var tagResource[]
     */
    public $tagResource;
    protected $_name = [
        'tagResource' => 'tag_resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagResource) {
            $res['tag_resource'] = [];
            if (null !== $this->tagResource && \is_array($this->tagResource)) {
                $n = 0;
                foreach ($this->tagResource as $item) {
                    $res['tag_resource'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['tag_resource'])) {
            if (!empty($map['tag_resource'])) {
                $model->tagResource = [];
                $n                  = 0;
                foreach ($map['tag_resource'] as $item) {
                    $model->tagResource[$n++] = null !== $item ? tagResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
