<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;
use AlibabaCloud\Tea\Model;

class GetTemplateScratchResponseBody extends Model
{
    /**
     * @example A8E0EF98-6FBD-5656-8298-FC8194F0F7B7
     *
     * @var string
     */
    public $requestId;

    /**
     * @var templateScratch
     */
    public $templateScratch;
    protected $_name = [
        'requestId'       => 'RequestId',
        'templateScratch' => 'TemplateScratch',
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
        if (null !== $this->templateScratch) {
            $res['TemplateScratch'] = null !== $this->templateScratch ? $this->templateScratch->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateScratchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateScratch'])) {
            $model->templateScratch = templateScratch::fromMap($map['TemplateScratch']);
        }

        return $model;
    }
}
