<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @var bool
     */
    public $retainCloudAssistant;
    protected $_name = [
        'retainCloudAssistant' => 'RetainCloudAssistant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['RetainCloudAssistant'])) {
            $model->retainCloudAssistant = $map['RetainCloudAssistant'];
        }

        return $model;
    }
}
