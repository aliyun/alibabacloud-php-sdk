<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;

class advancedOptions extends Model
{
    /**
     * @var string
     */
    public $imageNameSuffix;
    /**
     * @var bool
     */
    public $retainCloudAssistant;
    protected $_name = [
        'imageNameSuffix'      => 'ImageNameSuffix',
        'retainCloudAssistant' => 'RetainCloudAssistant',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
