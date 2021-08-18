<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class qualityStatDataList extends Model
{
    /**
     * @description 统计名称， 当StatDim=CHANNEL_ONLINE： ONE_TO_FIVE：1-5人 SIX_TO_TEN：6-10人 ELEVEN_TO_TWENTY：11-20人 TWENTY_ONE_TO_FIFTY: 21-50人 ABOVE_FIFTY：50人以上  当StatDim=NETWORK： WiFi，4G等  当StatDim=OS： iOS、android等
     *
     * @var string
     */
    public $name;

    /**
     * @description 通话时长用量占比，四位小数表示，如1.0000
     *
     * @var string
     */
    public $callDurationRatio;

    /**
     * @description 加入频道成功率， 四位小数表示，如1.0000
     *
     * @var string
     */
    public $joinChannelSucRate;

    /**
     * @description 5秒加入频道成功率， 四位小数表示，如1.0000
     *
     * @var string
     */
    public $joinChannelSucFiveSecRate;

    /**
     * @description 音频首次出声时间，单位毫秒
     *
     * @var int
     */
    public $audioSpeakOutDuration;

    /**
     * @description 视频首次出图时间，单位毫秒
     *
     * @var int
     */
    public $videoFirstPicDuration;

    /**
     * @description 音频卡顿率， 四位小数表示，如0.0034
     *
     * @var string
     */
    public $audioStuckRate;

    /**
     * @description 视频卡顿率， 四位小数表示，如0.0038
     *
     * @var string
     */
    public $videoStuckRate;

    /**
     * @description 音频延时，单位毫秒
     *
     * @var int
     */
    public $audioDelay;

    /**
     * @description 视频延时，单位毫秒
     *
     * @var int
     */
    public $videoDelay;

    /**
     * @description 音频优质传输率， 四位小数表示，如0.9927
     *
     * @var string
     */
    public $audioHighQualityTransmissionRate;

    /**
     * @description 视频优质传输率，四位小数表示，如0.9965
     *
     * @var string
     */
    public $videoHighQualityTransmissionRate;
    protected $_name = [
        'name'                             => 'Name',
        'callDurationRatio'                => 'CallDurationRatio',
        'joinChannelSucRate'               => 'JoinChannelSucRate',
        'joinChannelSucFiveSecRate'        => 'JoinChannelSucFiveSecRate',
        'audioSpeakOutDuration'            => 'AudioSpeakOutDuration',
        'videoFirstPicDuration'            => 'VideoFirstPicDuration',
        'audioStuckRate'                   => 'AudioStuckRate',
        'videoStuckRate'                   => 'VideoStuckRate',
        'audioDelay'                       => 'AudioDelay',
        'videoDelay'                       => 'VideoDelay',
        'audioHighQualityTransmissionRate' => 'AudioHighQualityTransmissionRate',
        'videoHighQualityTransmissionRate' => 'VideoHighQualityTransmissionRate',
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
        if (null !== $this->callDurationRatio) {
            $res['CallDurationRatio'] = $this->callDurationRatio;
        }
        if (null !== $this->joinChannelSucRate) {
            $res['JoinChannelSucRate'] = $this->joinChannelSucRate;
        }
        if (null !== $this->joinChannelSucFiveSecRate) {
            $res['JoinChannelSucFiveSecRate'] = $this->joinChannelSucFiveSecRate;
        }
        if (null !== $this->audioSpeakOutDuration) {
            $res['AudioSpeakOutDuration'] = $this->audioSpeakOutDuration;
        }
        if (null !== $this->videoFirstPicDuration) {
            $res['VideoFirstPicDuration'] = $this->videoFirstPicDuration;
        }
        if (null !== $this->audioStuckRate) {
            $res['AudioStuckRate'] = $this->audioStuckRate;
        }
        if (null !== $this->videoStuckRate) {
            $res['VideoStuckRate'] = $this->videoStuckRate;
        }
        if (null !== $this->audioDelay) {
            $res['AudioDelay'] = $this->audioDelay;
        }
        if (null !== $this->videoDelay) {
            $res['VideoDelay'] = $this->videoDelay;
        }
        if (null !== $this->audioHighQualityTransmissionRate) {
            $res['AudioHighQualityTransmissionRate'] = $this->audioHighQualityTransmissionRate;
        }
        if (null !== $this->videoHighQualityTransmissionRate) {
            $res['VideoHighQualityTransmissionRate'] = $this->videoHighQualityTransmissionRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityStatDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CallDurationRatio'])) {
            $model->callDurationRatio = $map['CallDurationRatio'];
        }
        if (isset($map['JoinChannelSucRate'])) {
            $model->joinChannelSucRate = $map['JoinChannelSucRate'];
        }
        if (isset($map['JoinChannelSucFiveSecRate'])) {
            $model->joinChannelSucFiveSecRate = $map['JoinChannelSucFiveSecRate'];
        }
        if (isset($map['AudioSpeakOutDuration'])) {
            $model->audioSpeakOutDuration = $map['AudioSpeakOutDuration'];
        }
        if (isset($map['VideoFirstPicDuration'])) {
            $model->videoFirstPicDuration = $map['VideoFirstPicDuration'];
        }
        if (isset($map['AudioStuckRate'])) {
            $model->audioStuckRate = $map['AudioStuckRate'];
        }
        if (isset($map['VideoStuckRate'])) {
            $model->videoStuckRate = $map['VideoStuckRate'];
        }
        if (isset($map['AudioDelay'])) {
            $model->audioDelay = $map['AudioDelay'];
        }
        if (isset($map['VideoDelay'])) {
            $model->videoDelay = $map['VideoDelay'];
        }
        if (isset($map['AudioHighQualityTransmissionRate'])) {
            $model->audioHighQualityTransmissionRate = $map['AudioHighQualityTransmissionRate'];
        }
        if (isset($map['VideoHighQualityTransmissionRate'])) {
            $model->videoHighQualityTransmissionRate = $map['VideoHighQualityTransmissionRate'];
        }

        return $model;
    }
}
