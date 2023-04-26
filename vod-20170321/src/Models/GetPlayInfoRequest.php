<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @description The ID of the media transcoding job. This ID uniquely identifies a media stream.
     *
     * @example danmu
     *
     * @var string
     */
    public $additionType;

    /**
     * @description The frame rate of the media stream. Unit: frames per second.
     *
     * @example 1800
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The type of Narrowband HD transcoding. Valid values:
     *
     *   **0**: regular
     *   **1.0**: Narrowband HD 1.0
     *   **2.0**: Narrowband HD 2.0
     *
     * This parameter is returned only when a quality that is available in the built-in Narrowband HD 1.0 transcoding template is specified. For more information, see the [Definition parameter in the TranscodeTemplate](~~52839~~) table.
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The update time. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example mp4,m3u8
     *
     * @var string
     */
    public $formats;

    /**
     * @description The URL of the masked live comment data. Set the value to **danmu**.
     *
     * > This parameter takes effect only when the outputType parameter is set to **cdn**.
     * @example cdn
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The quality of the video stream. Valid values:
     *
     *   **FD**: low definition
     *   **LD**: standard definition
     *   **SD**: high definition
     *   **HD**: ultra-high definition
     *   **OD**: original definition
     *   **2K**: 2K
     *   **4K**: 4K
     *   **SQ**: standard sound quality
     *   **HQ**: high sound quality
     *   **AUTO**: adaptive bitrate
     *
     * @example {"PlayDomain":"vod.test_domain","XForwardedFor":"yqCD7Fp1uqChoVj/sl/p5Q==","PreviewTime":"20","MtsHlsUriToken":"yqCD7Fp1uqChoVjslp5Q"}
     *
     * @var string
     */
    public $playConfig;

    /**
     * @description The playback URL of the video stream.
     *
     * @example {"uid":"12345","rand":"abckljd"}
     *
     * @var string
     */
    public $reAuthInfo;

    /**
     * @description The time when the audio or video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example Single
     *
     * @var string
     */
    public $resultType;

    /**
     * @description Details of the audio or video file.
     *
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The basic information about the audio or video file.
     *
     * @example 93ab850b4f654b6e91d24d81d44****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'additionType' => 'AdditionType',
        'authTimeout'  => 'AuthTimeout',
        'definition'   => 'Definition',
        'formats'      => 'Formats',
        'outputType'   => 'OutputType',
        'playConfig'   => 'PlayConfig',
        'reAuthInfo'   => 'ReAuthInfo',
        'resultType'   => 'ResultType',
        'streamType'   => 'StreamType',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }
        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }
        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
