<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakChannelCntDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeChannelPeak;

    /**
     * @var int
     */
    public $activeChannelPeakTime;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'activeChannelPeak'     => 'ActiveChannelPeak',
        'activeChannelPeakTime' => 'ActiveChannelPeakTime',
        'timestamp'             => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeChannelPeak) {
            $res['ActiveChannelPeak'] = $this->activeChannelPeak;
        }
        if (null !== $this->activeChannelPeakTime) {
            $res['ActiveChannelPeakTime'] = $this->activeChannelPeakTime;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveChannelPeak'])) {
            $model->activeChannelPeak = $map['ActiveChannelPeak'];
        }
        if (isset($map['ActiveChannelPeakTime'])) {
            $model->activeChannelPeakTime = $map['ActiveChannelPeakTime'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
