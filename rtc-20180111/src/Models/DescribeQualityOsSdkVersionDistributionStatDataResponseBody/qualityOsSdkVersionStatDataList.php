<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOsSdkVersionDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class qualityOsSdkVersionStatDataList extends Model
{
    /**
     * @example 248
     *
     * @var int
     */
    public $audioDelay;

    /**
     * @example 0.9987
     *
     * @var string
     */
    public $audioHighQualityTransmissionRate;

    /**
     * @example 0.0011
     *
     * @var string
     */
    public $audioStuckRate;

    /**
     * @example 0.0984
     *
     * @var string
     */
    public $callDurationRatio;

    /**
     * @example 0.8276
     *
     * @var string
     */
    public $joinChannelSucFiveSecRate;

    /**
     * @example 0.8276
     *
     * @var string
     */
    public $joinChannelSucRate;

    /**
     * @example 2.1.0.210316.dev--release/rtcsdk_v2.1
     *
     * @var string
     */
    public $name;

    /**
     * @example macOS
     *
     * @var string
     */
    public $os;

    /**
     * @example 333
     *
     * @var int
     */
    public $videoDelay;

    /**
     * @example 5643
     *
     * @var int
     */
    public $videoFirstPicDuration;

    /**
     * @example 0.9997
     *
     * @var string
     */
    public $videoHighQualityTransmissionRate;

    /**
     * @example 0.0054
     *
     * @var string
     */
    public $videoStuckRate;
    protected $_name = [
        'audioDelay'                       => 'AudioDelay',
        'audioHighQualityTransmissionRate' => 'AudioHighQualityTransmissionRate',
        'audioStuckRate'                   => 'AudioStuckRate',
        'callDurationRatio'                => 'CallDurationRatio',
        'joinChannelSucFiveSecRate'        => 'JoinChannelSucFiveSecRate',
        'joinChannelSucRate'               => 'JoinChannelSucRate',
        'name'                             => 'Name',
        'os'                               => 'Os',
        'videoDelay'                       => 'VideoDelay',
        'videoFirstPicDuration'            => 'VideoFirstPicDuration',
        'videoHighQualityTransmissionRate' => 'VideoHighQualityTransmissionRate',
        'videoStuckRate'                   => 'VideoStuckRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioDelay) {
            $res['AudioDelay'] = $this->audioDelay;
        }
        if (null !== $this->audioHighQualityTransmissionRate) {
            $res['AudioHighQualityTransmissionRate'] = $this->audioHighQualityTransmissionRate;
        }
        if (null !== $this->audioStuckRate) {
            $res['AudioStuckRate'] = $this->audioStuckRate;
        }
        if (null !== $this->callDurationRatio) {
            $res['CallDurationRatio'] = $this->callDurationRatio;
        }
        if (null !== $this->joinChannelSucFiveSecRate) {
            $res['JoinChannelSucFiveSecRate'] = $this->joinChannelSucFiveSecRate;
        }
        if (null !== $this->joinChannelSucRate) {
            $res['JoinChannelSucRate'] = $this->joinChannelSucRate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->videoDelay) {
            $res['VideoDelay'] = $this->videoDelay;
        }
        if (null !== $this->videoFirstPicDuration) {
            $res['VideoFirstPicDuration'] = $this->videoFirstPicDuration;
        }
        if (null !== $this->videoHighQualityTransmissionRate) {
            $res['VideoHighQualityTransmissionRate'] = $this->videoHighQualityTransmissionRate;
        }
        if (null !== $this->videoStuckRate) {
            $res['VideoStuckRate'] = $this->videoStuckRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityOsSdkVersionStatDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioDelay'])) {
            $model->audioDelay = $map['AudioDelay'];
        }
        if (isset($map['AudioHighQualityTransmissionRate'])) {
            $model->audioHighQualityTransmissionRate = $map['AudioHighQualityTransmissionRate'];
        }
        if (isset($map['AudioStuckRate'])) {
            $model->audioStuckRate = $map['AudioStuckRate'];
        }
        if (isset($map['CallDurationRatio'])) {
            $model->callDurationRatio = $map['CallDurationRatio'];
        }
        if (isset($map['JoinChannelSucFiveSecRate'])) {
            $model->joinChannelSucFiveSecRate = $map['JoinChannelSucFiveSecRate'];
        }
        if (isset($map['JoinChannelSucRate'])) {
            $model->joinChannelSucRate = $map['JoinChannelSucRate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['VideoDelay'])) {
            $model->videoDelay = $map['VideoDelay'];
        }
        if (isset($map['VideoFirstPicDuration'])) {
            $model->videoFirstPicDuration = $map['VideoFirstPicDuration'];
        }
        if (isset($map['VideoHighQualityTransmissionRate'])) {
            $model->videoHighQualityTransmissionRate = $map['VideoHighQualityTransmissionRate'];
        }
        if (isset($map['VideoStuckRate'])) {
            $model->videoStuckRate = $map['VideoStuckRate'];
        }

        return $model;
    }
}
