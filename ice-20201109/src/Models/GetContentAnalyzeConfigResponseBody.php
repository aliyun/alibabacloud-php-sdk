<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponseBody\contentAnalyzeConfig;
use AlibabaCloud\Tea\Model;

class GetContentAnalyzeConfigResponseBody extends Model
{
    /**
     * @var contentAnalyzeConfig
     */
    public $contentAnalyzeConfig;

    /**
     * @example 31FEC819-2344-5771-9366-9172DB0D26C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contentAnalyzeConfig' => 'ContentAnalyzeConfig',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentAnalyzeConfig) {
            $res['ContentAnalyzeConfig'] = null !== $this->contentAnalyzeConfig ? $this->contentAnalyzeConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContentAnalyzeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentAnalyzeConfig'])) {
            $model->contentAnalyzeConfig = contentAnalyzeConfig::fromMap($map['ContentAnalyzeConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
