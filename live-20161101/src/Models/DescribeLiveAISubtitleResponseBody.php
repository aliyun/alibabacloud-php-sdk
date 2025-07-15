<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs;
use AlibabaCloud\Tea\Model;

class DescribeLiveAISubtitleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the subtitle templates.
     *
     * @var subtitleConfigs
     */
    public $subtitleConfigs;
    protected $_name = [
        'requestId' => 'RequestId',
        'subtitleConfigs' => 'SubtitleConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subtitleConfigs) {
            $res['SubtitleConfigs'] = null !== $this->subtitleConfigs ? $this->subtitleConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAISubtitleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubtitleConfigs'])) {
            $model->subtitleConfigs = subtitleConfigs::fromMap($map['SubtitleConfigs']);
        }

        return $model;
    }
}
