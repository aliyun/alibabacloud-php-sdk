<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;
use AlibabaCloud\Tea\Model;

class imagePipeline extends Model
{
    /**
     * @var imagePipelineSet[]
     */
    public $imagePipelineSet;
    protected $_name = [
        'imagePipelineSet' => 'ImagePipelineSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagePipelineSet) {
            $res['ImagePipelineSet'] = [];
            if (null !== $this->imagePipelineSet && \is_array($this->imagePipelineSet)) {
                $n = 0;
                foreach ($this->imagePipelineSet as $item) {
                    $res['ImagePipelineSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imagePipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagePipelineSet'])) {
            if (!empty($map['ImagePipelineSet'])) {
                $model->imagePipelineSet = [];
                $n                       = 0;
                foreach ($map['ImagePipelineSet'] as $item) {
                    $model->imagePipelineSet[$n++] = null !== $item ? imagePipelineSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
