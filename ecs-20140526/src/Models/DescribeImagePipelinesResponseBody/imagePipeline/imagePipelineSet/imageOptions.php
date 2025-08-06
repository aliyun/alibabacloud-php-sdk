<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageFeatures;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageTags;

class imageOptions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var imageFeatures
     */
    public $imageFeatures;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var imageTags
     */
    public $imageTags;
    protected $_name = [
        'description' => 'Description',
        'imageFamily' => 'ImageFamily',
        'imageFeatures' => 'ImageFeatures',
        'imageName' => 'ImageName',
        'imageTags' => 'ImageTags',
    ];

    public function validate()
    {
        if (null !== $this->imageFeatures) {
            $this->imageFeatures->validate();
        }
        if (null !== $this->imageTags) {
            $this->imageTags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageFeatures) {
            $res['ImageFeatures'] = null !== $this->imageFeatures ? $this->imageFeatures->toArray($noStream) : $this->imageFeatures;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageTags) {
            $res['ImageTags'] = null !== $this->imageTags ? $this->imageTags->toArray($noStream) : $this->imageTags;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageFeatures'])) {
            $model->imageFeatures = imageFeatures::fromMap($map['ImageFeatures']);
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageTags'])) {
            $model->imageTags = imageTags::fromMap($map['ImageTags']);
        }

        return $model;
    }
}
