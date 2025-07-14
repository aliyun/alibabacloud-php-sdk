<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @description Specifies whether to disable the feature that automatically adds a suffix to the name of the image created based on the image template. Valid value:
     *
     *   disable
     *
     * @example disable
     *
     * @var string
     */
    public $imageNameSuffix;

    /**
     * @description Specifies whether to retain Cloud Assistant Agent that is installed during the image building process. During the image building process, the system automatically installs Cloud Assistant Agent on the intermediate instance to run commands. You can choose whether to retain Cloud Assistant Agent that is installed during the image building process in the new image. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * >  The setting of this parameter does not affect Cloud Assistant Agent that comes with your image.
     *
     * @example true
     *
     * @var bool
     */
    public $retainCloudAssistant;
    protected $_name = [
        'imageNameSuffix' => 'ImageNameSuffix',
        'retainCloudAssistant' => 'RetainCloudAssistant',
    ];

    public function validate() {}

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
