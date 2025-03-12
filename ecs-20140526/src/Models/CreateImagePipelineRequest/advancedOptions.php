<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @description 是否禁用目标镜像名称自动增加后缀。可能值：
     * - disable：禁用。
     * @example disable
     *
     * @var string
     */
    public $imageNameSuffix;

    /**
     * @description Specifies whether to retain Cloud Assistant Agent that is installed during the image building process. During the image building process, the system automatically installs Cloud Assistant Agent on the intermediate instance to run commands. You can choose whether to retain Cloud Assistant Agent that is installed during the image building process in the new image. Valid values:
     *
     *   true: retains Cloud Assistant Agent that is installed during the image building process in the new image.
     *   false: does not retain Cloud Assistant Agent that is installed during the image building process in the new image.
     *
     * >  The setting of this parameter does not affect Cloud Assistant Agent that comes with your image.
     * @example true
     *
     * @var bool
     */
    public $retainCloudAssistant;
    protected $_name = [
        'imageNameSuffix'      => 'ImageNameSuffix',
        'retainCloudAssistant' => 'RetainCloudAssistant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageNameSuffix) {
            $res['ImageNameSuffix'] = $this->imageNameSuffix;
        }
        if (null !== $this->retainCloudAssistant) {
            $res['RetainCloudAssistant'] = $this->retainCloudAssistant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageNameSuffix'])) {
            $model->imageNameSuffix = $map['ImageNameSuffix'];
        }
        if (isset($map['RetainCloudAssistant'])) {
            $model->retainCloudAssistant = $map['RetainCloudAssistant'];
        }

        return $model;
    }
}
