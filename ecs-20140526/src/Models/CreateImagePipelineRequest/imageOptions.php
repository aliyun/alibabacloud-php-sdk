<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageFeatures;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageTags;
use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @description The description of the image. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The image family. The image family name must be 2 to 128 characters in length. The name must start with a letter and cannot start with acs: or aliyun. The name cannot contain http:// or https:// and can contain letters, digits, colons (:), underscores (_), and hyphens (-).
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
     * @description The prefix of the image name. The prefix must be 2 to 64 characters in length. The prefix must start with a letter and cannot start with `http://` or `https://`. The prefix can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * The system generates the final image name that consists of the specified prefix and the ID of the build task (`ExecutionId`) in the format of `{ImageName}_{ExecutionId}`.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The tags to add to the image.
     *
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

    public function validate() {}

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
            $res['ImageTags'] = [];
            if (null !== $this->imageTags && \is_array($this->imageTags)) {
                $n = 0;
                foreach ($this->imageTags as $item) {
                    $res['ImageTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['ImageTags'])) {
                $model->imageTags = [];
                $n = 0;
                foreach ($map['ImageTags'] as $item) {
                    $model->imageTags[$n++] = null !== $item ? imageTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
