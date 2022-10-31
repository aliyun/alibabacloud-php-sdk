<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

use AlibabaCloud\Tea\Model;

class outputUrls extends Model
{
    /**
     * @var string
     */
    public $flvUrl;

    /**
     * @var string
     */
    public $rtmpUrl;
    protected $_name = [
        'flvUrl'  => 'FlvUrl',
        'rtmpUrl' => 'RtmpUrl',
    ];

    public function validate()
    {
    }

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
