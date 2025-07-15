<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamFlvDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamHlsDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamRtmpDelayConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamDelayConfigResponseBody extends Model
{
    /**
     * @description The latency of FLV-based playback.
     *
     * @var liveStreamFlvDelayConfig
     */
    public $liveStreamFlvDelayConfig;

    /**
     * @description The latency of HLS-based playback.
     *
     * @var liveStreamHlsDelayConfig
     */
    public $liveStreamHlsDelayConfig;

    /**
     * @description The latency of RTMP-based playback.
     *
     * @var liveStreamRtmpDelayConfig
     */
    public $liveStreamRtmpDelayConfig;

    /**
     * @description The request ID.
     *
     * @example 785C9CB0-EB8A-4912-BBF2-966BEFD32DC3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamFlvDelayConfig' => 'LiveStreamFlvDelayConfig',
        'liveStreamHlsDelayConfig' => 'LiveStreamHlsDelayConfig',
        'liveStreamRtmpDelayConfig' => 'LiveStreamRtmpDelayConfig',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamFlvDelayConfig) {
            $res['LiveStreamFlvDelayConfig'] = null !== $this->liveStreamFlvDelayConfig ? $this->liveStreamFlvDelayConfig->toMap() : null;
        }
        if (null !== $this->liveStreamHlsDelayConfig) {
            $res['LiveStreamHlsDelayConfig'] = null !== $this->liveStreamHlsDelayConfig ? $this->liveStreamHlsDelayConfig->toMap() : null;
        }
        if (null !== $this->liveStreamRtmpDelayConfig) {
            $res['LiveStreamRtmpDelayConfig'] = null !== $this->liveStreamRtmpDelayConfig ? $this->liveStreamRtmpDelayConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamDelayConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamFlvDelayConfig'])) {
            $model->liveStreamFlvDelayConfig = liveStreamFlvDelayConfig::fromMap($map['LiveStreamFlvDelayConfig']);
        }
        if (isset($map['LiveStreamHlsDelayConfig'])) {
            $model->liveStreamHlsDelayConfig = liveStreamHlsDelayConfig::fromMap($map['LiveStreamHlsDelayConfig']);
        }
        if (isset($map['LiveStreamRtmpDelayConfig'])) {
            $model->liveStreamRtmpDelayConfig = liveStreamRtmpDelayConfig::fromMap($map['LiveStreamRtmpDelayConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
