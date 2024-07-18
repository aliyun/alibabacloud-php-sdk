<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateScratchResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 84980977-22F0-5421-B30D-B201311D5DCF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource scenario.
     *
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'templateScratchId' => 'TemplateScratchId',
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
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateScratchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }

        return $model;
    }
}
