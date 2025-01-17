<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponseBody\contentAnalyzeConfig;

class GetContentAnalyzeConfigResponseBody extends Model
{
    /**
     * @var contentAnalyzeConfig
     */
    public $contentAnalyzeConfig;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contentAnalyzeConfig' => 'ContentAnalyzeConfig',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->contentAnalyzeConfig) {
            $this->contentAnalyzeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentAnalyzeConfig) {
            $res['ContentAnalyzeConfig'] = null !== $this->contentAnalyzeConfig ? $this->contentAnalyzeConfig->toArray($noStream) : $this->contentAnalyzeConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ContentAnalyzeConfig'])) {
            $model->contentAnalyzeConfig = contentAnalyzeConfig::fromMap($map['ContentAnalyzeConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
