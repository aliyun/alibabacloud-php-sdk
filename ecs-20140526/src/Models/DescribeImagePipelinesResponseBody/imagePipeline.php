<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

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
        if (\is_array($this->imagePipelineSet)) {
            Model::validateArray($this->imagePipelineSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imagePipelineSet) {
            if (\is_array($this->imagePipelineSet)) {
                $res['ImagePipelineSet'] = [];
                $n1 = 0;
                foreach ($this->imagePipelineSet as $item1) {
                    $res['ImagePipelineSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImagePipelineSet'])) {
            if (!empty($map['ImagePipelineSet'])) {
                $model->imagePipelineSet = [];
                $n1 = 0;
                foreach ($map['ImagePipelineSet'] as $item1) {
                    $model->imagePipelineSet[$n1++] = imagePipelineSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
