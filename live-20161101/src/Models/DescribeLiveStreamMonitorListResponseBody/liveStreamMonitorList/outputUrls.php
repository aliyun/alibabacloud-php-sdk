<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

use AlibabaCloud\Tea\Model;

class outputUrls extends Model
{
    /**
     * @description The output URL in the Flash Video (FLV) format.
     *
     * @example http://demo.aliyundoc.com/monitor/445409ec-7eaa-461d-8f29-4bec2eb9****.flv
     *
     * @var string
     */
    public $flvUrl;

    /**
     * @description The output URL in the Real-Time Messaging Protocol (RTMP) format.
     *
     * @example rtmp://demo.aliyundoc.com/monitor/445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $rtmpUrl;
    protected $_name = [
        'flvUrl' => 'FlvUrl',
        'rtmpUrl' => 'RtmpUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->flvUrl) {
            $res['FlvUrl'] = $this->flvUrl;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlvUrl'])) {
            $model->flvUrl = $map['FlvUrl'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }

        return $model;
    }
}
