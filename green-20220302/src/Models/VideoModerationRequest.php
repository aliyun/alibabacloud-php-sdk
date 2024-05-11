<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class VideoModerationRequest extends Model
{
    /**
     * @example videoDetection
     *
     * @var string
     */
    public $service;

    /**
     * @example {\\"url\\": \\"https://talesofai.oss-cn-shanghai.aliyuncs.com/xxx.mp4\\", \\"dataId\\": \\"94db0b88-f521-11ed-806e-fae21c1f239c\\"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'service'           => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoModerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
