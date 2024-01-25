<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakUserCntDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeUserPeak;

    /**
     * @var int
     */
    public $activeUserPeakTime;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'activeUserPeak'     => 'ActiveUserPeak',
        'activeUserPeakTime' => 'ActiveUserPeakTime',
        'timestamp'          => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeUserPeak) {
            $res['ActiveUserPeak'] = $this->activeUserPeak;
        }
        if (null !== $this->activeUserPeakTime) {
            $res['ActiveUserPeakTime'] = $this->activeUserPeakTime;
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
        if (isset($map['ActiveUserPeak'])) {
            $model->activeUserPeak = $map['ActiveUserPeak'];
        }
        if (isset($map['ActiveUserPeakTime'])) {
            $model->activeUserPeakTime = $map['ActiveUserPeakTime'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
