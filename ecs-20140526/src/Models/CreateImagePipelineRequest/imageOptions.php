<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageFeatures;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageTags;

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
     * @var imageTags[]
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
        if (\is_array($this->imageTags)) {
            Model::validateArray($this->imageTags);
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
            if (\is_array($this->imageTags)) {
                $res['ImageTags'] = [];
                $n1 = 0;
                foreach ($this->imageTags as $item1) {
                    $res['ImageTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['ImageTags'])) {
                $model->imageTags = [];
                $n1 = 0;
                foreach ($map['ImageTags'] as $item1) {
                    $model->imageTags[$n1++] = imageTags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
