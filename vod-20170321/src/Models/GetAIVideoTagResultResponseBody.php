<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;
use AlibabaCloud\Tea\Model;

class GetAIVideoTagResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoTagResult
     */
    public $videoTagResult;
    protected $_name = [
        'requestId'      => 'RequestId',
        'videoTagResult' => 'VideoTagResult',
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
        if (null !== $this->videoTagResult) {
            $res['VideoTagResult'] = null !== $this->videoTagResult ? $this->videoTagResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAIVideoTagResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoTagResult'])) {
            $model->videoTagResult = videoTagResult::fromMap($map['VideoTagResult']);
        }

        return $model;
    }
}
