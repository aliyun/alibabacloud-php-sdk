<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class ImageBatchModerationRequest extends Model
{
    /**
     * @example {
     * "imageUrl": "https://img.alicdn.com/tfs/TB1U4r9AeH2gK0jSZJnXXaT1FXa-2880-480.png",
     * "dataId": "img123****"
     * }
     * @var string
     */
    public $serviceParameters;

    /**
     * @example baselineCheck,tonalityImprove
     *
     * @var string
     */
    public $services;
    protected $_name = [
        'serviceParameters' => 'ServiceParameters',
        'services'          => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBatchModerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['Services'])) {
            $model->services = $map['Services'];
        }

        return $model;
    }
}
