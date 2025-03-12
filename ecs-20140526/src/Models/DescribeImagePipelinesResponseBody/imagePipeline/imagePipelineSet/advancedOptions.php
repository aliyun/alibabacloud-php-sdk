<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @description Indicates whether to disable the feature that automatically adds a suffix to the name of the image created based on the image template. Valid value:
     *
     *   disable
     *
     * @example disable
     *
     * @var string
     */
    public $imageNameSuffix;

    /**
     * @description Indicates whether to retain Cloud Assistant. During the image building process, the system automatically installs Cloud Assistant in the intermediate instance to run commands. You can choose whether to retain Cloud Assistant in the new image created based on the image template. Valid values:
     *
     *   true: retains Cloud Assistant.
     *   false: does not retain Cloud Assistant.
     *
     * >  This parameter does not affect Cloud Assistant that comes with your image.
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
