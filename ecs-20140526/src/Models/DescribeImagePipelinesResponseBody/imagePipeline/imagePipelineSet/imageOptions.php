<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageFeatures;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\imageOptions\imageTags;
use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @description The description of the image.
     *
     * @example description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The image family.
     *
     * @example family
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The feature attributes of the image.
     *
     * @var imageFeatures
     */
    public $imageFeatures;

    /**
     * @description The prefix of the image name.
     *
     * @example imageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The tags of the image.
     *
     * @var imageTags
     */
    public $imageTags;
    protected $_name = [
        'description'   => 'Description',
        'imageFamily'   => 'ImageFamily',
        'imageFeatures' => 'ImageFeatures',
        'imageName'     => 'ImageName',
        'imageTags'     => 'ImageTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageFeatures) {
            $res['ImageFeatures'] = null !== $this->imageFeatures ? $this->imageFeatures->toMap() : null;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageTags) {
            $res['ImageTags'] = null !== $this->imageTags ? $this->imageTags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageOptions
     */
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
