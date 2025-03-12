<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageFeatures;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions\imageTags;
use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @description 描述信息。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description 目标镜像族系。长度为 2~128 个英文或中文字符。必须以大小写字母或中文开头，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
     *
     * @example family
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description 目标镜像特性相关属性。
     *
     * @var imageFeatures
     */
    public $imageFeatures;

    /**
     * @description 目标镜像名称前缀。长度为2~64个字符，必须以大小写字母或中文开头，不能以`http://`和`https://`开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。
     *
     * 最终完整的镜像名称由系统自动拼接名称前缀与构建任务ID（`ExecutionId`），格式为`{ImageName}_{ExecutionId}`。
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 目标镜像标签。
     *
     * @var imageTags[]
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
                $n                = 0;
                foreach ($map['ImageTags'] as $item) {
                    $model->imageTags[$n++] = null !== $item ? imageTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
