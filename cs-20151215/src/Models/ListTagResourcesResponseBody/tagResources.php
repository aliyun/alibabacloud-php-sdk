<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources\tagResource;
use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description 资源标签。
     *
     * @var tagResource
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
            $res['tag_resource'] = null !== $this->tagResource ? $this->tagResource->toMap() : null;
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
            $model->tagResource = tagResource::fromMap($map['tag_resource']);
        }

        return $model;
    }
}
