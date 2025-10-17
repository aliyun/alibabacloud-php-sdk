<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\importImageTags\importImageTag;

class importImageTags extends Model
{
    /**
     * @var importImageTag[]
     */
    public $importImageTag;
    protected $_name = [
        'importImageTag' => 'ImportImageTag',
    ];

    public function validate()
    {
        if (\is_array($this->importImageTag)) {
            Model::validateArray($this->importImageTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importImageTag) {
            if (\is_array($this->importImageTag)) {
                $res['ImportImageTag'] = [];
                $n1 = 0;
                foreach ($this->importImageTag as $item1) {
                    $res['ImportImageTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImportImageTag'])) {
            if (!empty($map['ImportImageTag'])) {
                $model->importImageTag = [];
                $n1 = 0;
                foreach ($map['ImportImageTag'] as $item1) {
                    $model->importImageTag[$n1] = importImageTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
