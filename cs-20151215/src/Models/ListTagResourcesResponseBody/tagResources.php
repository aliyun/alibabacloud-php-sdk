<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources\tagResource;

class tagResources extends Model
{
    /**
     * @var tagResource[]
     */
    public $tagResource;
    protected $_name = [
        'tagResource' => 'tag_resource',
    ];

    public function validate()
    {
        if (\is_array($this->tagResource)) {
            Model::validateArray($this->tagResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagResource) {
            if (\is_array($this->tagResource)) {
                $res['tag_resource'] = [];
                $n1 = 0;
                foreach ($this->tagResource as $item1) {
                    $res['tag_resource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['tag_resource'])) {
            if (!empty($map['tag_resource'])) {
                $model->tagResource = [];
                $n1 = 0;
                foreach ($map['tag_resource'] as $item1) {
                    $model->tagResource[$n1] = tagResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
