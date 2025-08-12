<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

use AlibabaCloud\Dara\Model;

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
        'flvUrl' => 'FlvUrl',
        'rtmpUrl' => 'RtmpUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
