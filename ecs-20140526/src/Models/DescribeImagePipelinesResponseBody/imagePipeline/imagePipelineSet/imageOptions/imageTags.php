<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageTags\imageTag;
use AlibabaCloud\Tea\Model;

class imageTags extends Model
{
    /**
     * @var imageTag[]
     */
    public $imageTag;
    protected $_name = [
        'imageTag' => 'ImageTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageTag) {
            $res['ImageTag'] = [];
            if (null !== $this->imageTag && \is_array($this->imageTag)) {
                $n = 0;
                foreach ($this->imageTag as $item) {
                    $res['ImageTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageTag'])) {
            if (!empty($map['ImageTag'])) {
                $model->imageTag = [];
                $n               = 0;
                foreach ($map['ImageTag'] as $item) {
                    $model->imageTag[$n++] = null !== $item ? imageTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
