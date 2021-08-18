<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageStatList extends Model
{
    /**
     * @description 统计名称， 当StatDim=CHANNEL_ONLINE： ONE_TO_FIVE：1-5人 SIX_TO_TEN：6-10人 ELEVEN_TO_TWENTY：11-20人 TWENTY_ONE_TO_FIFTY: 21-50人 ABOVE_FIFTY：50人以上  当StatDim=NETWORK： WiFi，4G等  当StatDim=OS： iOS、android等
     *
     * @var string
     */
    public $name;

    /**
     * @description 音频通话时长，单位分钟
     *
     * @var int
     */
    public $audioCallDuration;

    /**
     * @description 视频通话时长，单位分钟
     *
     * @var int
     */
    public $videoCallDuration;

    /**
     * @description 总通话时长，单位分钟
     *
     * @var int
     */
    public $totalCallDuration;

    /**
     * @description 通话时长占比，四位小数表示，如1.0000
     *
     * @var string
     */
    public $callDurationRatio;
    protected $_name = [
        'name'              => 'Name',
        'audioCallDuration' => 'AudioCallDuration',
        'videoCallDuration' => 'VideoCallDuration',
        'totalCallDuration' => 'TotalCallDuration',
        'callDurationRatio' => 'CallDurationRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->audioCallDuration) {
            $res['AudioCallDuration'] = $this->audioCallDuration;
        }
        if (null !== $this->videoCallDuration) {
            $res['VideoCallDuration'] = $this->videoCallDuration;
        }
        if (null !== $this->totalCallDuration) {
            $res['TotalCallDuration'] = $this->totalCallDuration;
        }
        if (null !== $this->callDurationRatio) {
            $res['CallDurationRatio'] = $this->callDurationRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AudioCallDuration'])) {
            $model->audioCallDuration = $map['AudioCallDuration'];
        }
        if (isset($map['VideoCallDuration'])) {
            $model->videoCallDuration = $map['VideoCallDuration'];
        }
        if (isset($map['TotalCallDuration'])) {
            $model->totalCallDuration = $map['TotalCallDuration'];
        }
        if (isset($map['CallDurationRatio'])) {
            $model->callDurationRatio = $map['CallDurationRatio'];
        }

        return $model;
    }
}
