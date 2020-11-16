<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponse\liveStreamFlvDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponse\liveStreamHlsDelayConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponse\liveStreamRtmpDelayConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamDelayConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveStreamHlsDelayConfig
     */
    public $liveStreamHlsDelayConfig;

    /**
     * @var liveStreamFlvDelayConfig
     */
    public $liveStreamFlvDelayConfig;

    /**
     * @var liveStreamRtmpDelayConfig
     */
    public $liveStreamRtmpDelayConfig;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'liveStreamHlsDelayConfig'  => 'LiveStreamHlsDelayConfig',
        'liveStreamFlvDelayConfig'  => 'LiveStreamFlvDelayConfig',
        'liveStreamRtmpDelayConfig' => 'LiveStreamRtmpDelayConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveStreamHlsDelayConfig', $this->liveStreamHlsDelayConfig, true);
        Model::validateRequired('liveStreamFlvDelayConfig', $this->liveStreamFlvDelayConfig, true);
        Model::validateRequired('liveStreamRtmpDelayConfig', $this->liveStreamRtmpDelayConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveStreamHlsDelayConfig) {
            $res['LiveStreamHlsDelayConfig'] = null !== $this->liveStreamHlsDelayConfig ? $this->liveStreamHlsDelayConfig->toMap() : null;
        }
        if (null !== $this->liveStreamFlvDelayConfig) {
            $res['LiveStreamFlvDelayConfig'] = null !== $this->liveStreamFlvDelayConfig ? $this->liveStreamFlvDelayConfig->toMap() : null;
        }
        if (null !== $this->liveStreamRtmpDelayConfig) {
            $res['LiveStreamRtmpDelayConfig'] = null !== $this->liveStreamRtmpDelayConfig ? $this->liveStreamRtmpDelayConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamDelayConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveStreamHlsDelayConfig'])) {
            $model->liveStreamHlsDelayConfig = liveStreamHlsDelayConfig::fromMap($map['LiveStreamHlsDelayConfig']);
        }
        if (isset($map['LiveStreamFlvDelayConfig'])) {
            $model->liveStreamFlvDelayConfig = liveStreamFlvDelayConfig::fromMap($map['LiveStreamFlvDelayConfig']);
        }
        if (isset($map['LiveStreamRtmpDelayConfig'])) {
            $model->liveStreamRtmpDelayConfig = liveStreamRtmpDelayConfig::fromMap($map['LiveStreamRtmpDelayConfig']);
        }

        return $model;
    }
}
