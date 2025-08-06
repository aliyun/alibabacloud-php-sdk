<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageTags\imageTag;

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
        if (\is_array($this->imageTag)) {
            Model::validateArray($this->imageTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageTag) {
            if (\is_array($this->imageTag)) {
                $res['ImageTag'] = [];
                $n1 = 0;
                foreach ($this->imageTag as $item1) {
                    $res['ImageTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageTag'])) {
            if (!empty($map['ImageTag'])) {
                $model->imageTag = [];
                $n1 = 0;
                foreach ($map['ImageTag'] as $item1) {
                    $model->imageTag[$n1] = imageTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
