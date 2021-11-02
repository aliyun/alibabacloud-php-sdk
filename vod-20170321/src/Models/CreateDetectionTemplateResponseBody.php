<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\CreateDetectionTemplateResponseBody\detectionTemplate;
use AlibabaCloud\Tea\Model;

class CreateDetectionTemplateResponseBody extends Model
{
    /**
     * @var detectionTemplate
     */
    public $detectionTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectionTemplate' => 'DetectionTemplate',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionTemplate) {
            $res['DetectionTemplate'] = null !== $this->detectionTemplate ? $this->detectionTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDetectionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectionTemplate'])) {
            $model->detectionTemplate = detectionTemplate::fromMap($map['DetectionTemplate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
