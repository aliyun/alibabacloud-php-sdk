<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamFlvDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamHlsDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody\liveStreamRtmpDelayConfig;

class DescribeLiveStreamDelayConfigResponseBody extends Model
{
    /**
     * @var liveStreamFlvDelayConfig
     */
    public $liveStreamFlvDelayConfig;

    /**
     * @var liveStreamHlsDelayConfig
     */
    public $liveStreamHlsDelayConfig;

    /**
     * @var liveStreamRtmpDelayConfig
     */
    public $liveStreamRtmpDelayConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamFlvDelayConfig' => 'LiveStreamFlvDelayConfig',
        'liveStreamHlsDelayConfig' => 'LiveStreamHlsDelayConfig',
        'liveStreamRtmpDelayConfig' => 'LiveStreamRtmpDelayConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamFlvDelayConfig) {
            $this->liveStreamFlvDelayConfig->validate();
        }
        if (null !== $this->liveStreamHlsDelayConfig) {
            $this->liveStreamHlsDelayConfig->validate();
        }
        if (null !== $this->liveStreamRtmpDelayConfig) {
            $this->liveStreamRtmpDelayConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamFlvDelayConfig) {
            $res['LiveStreamFlvDelayConfig'] = null !== $this->liveStreamFlvDelayConfig ? $this->liveStreamFlvDelayConfig->toArray($noStream) : $this->liveStreamFlvDelayConfig;
        }

        if (null !== $this->liveStreamHlsDelayConfig) {
            $res['LiveStreamHlsDelayConfig'] = null !== $this->liveStreamHlsDelayConfig ? $this->liveStreamHlsDelayConfig->toArray($noStream) : $this->liveStreamHlsDelayConfig;
        }

        if (null !== $this->liveStreamRtmpDelayConfig) {
            $res['LiveStreamRtmpDelayConfig'] = null !== $this->liveStreamRtmpDelayConfig ? $this->liveStreamRtmpDelayConfig->toArray($noStream) : $this->liveStreamRtmpDelayConfig;
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
