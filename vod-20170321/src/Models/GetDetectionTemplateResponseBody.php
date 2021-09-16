<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionTemplateResponseBody\detectionTemplate;
use AlibabaCloud\Tea\Model;

class GetDetectionTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var detectionTemplate
     */
    public $detectionTemplate;
    protected $_name = [
        'requestId'         => 'RequestId',
        'detectionTemplate' => 'DetectionTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->detectionTemplate) {
            $res['DetectionTemplate'] = null !== $this->detectionTemplate ? $this->detectionTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DetectionTemplate'])) {
            $model->detectionTemplate = detectionTemplate::fromMap($map['DetectionTemplate']);
        }

        return $model;
    }
}
