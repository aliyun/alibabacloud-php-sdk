<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeMetricDataResponseBody\streamDetailData;

use AlibabaCloud\Tea\Model;

class streamData extends Model
{
    /**
     * @description The name of the application.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The duration. Unit: seconds.
     *
     * @example 300
     *
     * @var int
     */
    public $duration;

    /**
     * @description The frame rate.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     * normal
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     * high
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     * def
     *
     * <!-- -->
     *
     * @example high
     *
     * @var string
     */
    public $fps;

    /**
     * @description The region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The resolution. Valid values:
     *
     *   2K: 2K resolution
     *   4K: 4K resolution
     *   LD: low definition
     *   SD: standard definition
     *   HD: high definition
     *   def: audio
     *
     * @example 4K
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The name of the stream.
     *
     * @example stream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2023-06-11T02:45:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The transcoding type. Valid values:
     *
     *   H264STD: standard transcoding based on H.264
     *   H264NBHD: Narrowband HD™ transcoding based on H.264
     *   H265STD: standard transcoding based on H.265
     *   AUDIO: audio transcoding
     *
     * @example H264STD
     *
     * @var string
     */
    public $transcodeType;
    protected $_name = [
        'appName' => 'AppName',
        'duration' => 'Duration',
        'fps' => 'Fps',
        'region' => 'Region',
        'resolution' => 'Resolution',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
        'transcodeType' => 'TranscodeType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->transcodeType) {
            $res['TranscodeType'] = $this->transcodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TranscodeType'])) {
            $model->transcodeType = $map['TranscodeType'];
        }

        return $model;
    }
}
