<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams;

use AlibabaCloud\Tea\Model;

class transConfig extends Model
{
    /**
     * @description The method that is used to adjust the resolution. This parameter takes effect only if both the Width and Height parameters are specified. You can use this parameter together with the LongShortMode parameter.
     *
     * For more information about examples, see How do I set the resolution for an output video?
     * @example none
     *
     * @var string
     */
    public $adjDarMethod;

    /**
     * @description Indicates whether the audio bitrate was checked. You can specify only one of the IsCheckAudioBitrate and IsCheckAudioBitrateFail parameters. The priority of the IsCheckAudioBitrateFail parameter is higher. Valid values:
     *
     *   true If the bitrate of the input audio is less than that of the output audio, the bitrate of the input audio is used for transcoding.
     *   false
     *
     * Default value:
     *
     *   If this parameter is not specified and the codec of the output audio is different from that of the input audio, the default value is false.
     *   If this parameter is not specified and the codec of the output audio is the same as that of the input audio, the default value is true.
     *
     * @example true
     *
     * @var string
     */
    public $isCheckAudioBitrate;

    /**
     * @description Indicates whether the audio bitrate was checked. You can specify only one of the IsCheckAudioBitrate and IsCheckAudioBitrateFail parameters. The priority of the IsCheckAudioBitrateFail parameter is higher. Valid values:
     *
     *   true If the bitrate of the input audio is less than that of the output audio, the transcoding job fails.
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var string
     */
    public $isCheckAudioBitrateFail;

    /**
     * @description Indicates whether the video resolution was checked. You can specify only one of the IsCheckReso and IsCheckResoFail parameters. The priority of the IsCheckResoFail parameter is higher. Valid values:
     *
     *   true If the width or height of the input video is less than that of the output video, the resolution of the input video is used for transcoding.
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var string
     */
    public $isCheckReso;

    /**
     * @description Indicates whether the video resolution was checked. You can specify only one of the IsCheckReso and IsCheckResoFail parameters. The priority of the IsCheckResoFail parameter is higher. Valid values:
     *
     *   true If the width or height of the input video is less than that of the output video, the transcoding job fails.
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var string
     */
    public $isCheckResoFail;

    /**
     * @description Indicates whether the video bitrate was checked. You can specify only one of the IsCheckVideoBitrate and IsCheckVideoBitrateFail parameters. The priority of the IsCheckVideoBitrateFail parameter is higher. Valid values:
     *
     *   true If the bitrate of the input video is less than that of the output video, the bitrate of the input video is used for transcoding.
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var string
     */
    public $isCheckVideoBitrate;

    /**
     * @description Indicates whether the video bitrate was checked. You can specify only one of the IsCheckVideoBitrate and IsCheckVideoBitrateFail parameters. The priority of the IsCheckVideoBitrateFail parameter is higher. Valid values:
     *
     *   true If the bitrate of the input video is less than that of the output video, the transcoding job fails.
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var string
     */
    public $isCheckVideoBitrateFail;

    /**
     * @description The video transcoding mode. Valid values:
     *
     *   onepass: You can set this parameter to onepass if the Bitrate parameter is set to ABR. The encoding speed of this mode is faster than that of the twopass mode.
     *   twopass: You can set this parameter to twopass if the Bitrate parameter is set to VBR. The encoding speed of this mode is slower than that of the onepass mode.
     *   CBR: the constant bitrate mode.
     *
     * Default value: onepass.
     * @example onepass
     *
     * @var string
     */
    public $transMode;
    protected $_name = [
        'adjDarMethod'            => 'AdjDarMethod',
        'isCheckAudioBitrate'     => 'IsCheckAudioBitrate',
        'isCheckAudioBitrateFail' => 'IsCheckAudioBitrateFail',
        'isCheckReso'             => 'IsCheckReso',
        'isCheckResoFail'         => 'IsCheckResoFail',
        'isCheckVideoBitrate'     => 'IsCheckVideoBitrate',
        'isCheckVideoBitrateFail' => 'IsCheckVideoBitrateFail',
        'transMode'               => 'TransMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjDarMethod) {
            $res['AdjDarMethod'] = $this->adjDarMethod;
        }
        if (null !== $this->isCheckAudioBitrate) {
            $res['IsCheckAudioBitrate'] = $this->isCheckAudioBitrate;
        }
        if (null !== $this->isCheckAudioBitrateFail) {
            $res['IsCheckAudioBitrateFail'] = $this->isCheckAudioBitrateFail;
        }
        if (null !== $this->isCheckReso) {
            $res['IsCheckReso'] = $this->isCheckReso;
        }
        if (null !== $this->isCheckResoFail) {
            $res['IsCheckResoFail'] = $this->isCheckResoFail;
        }
        if (null !== $this->isCheckVideoBitrate) {
            $res['IsCheckVideoBitrate'] = $this->isCheckVideoBitrate;
        }
        if (null !== $this->isCheckVideoBitrateFail) {
            $res['IsCheckVideoBitrateFail'] = $this->isCheckVideoBitrateFail;
        }
        if (null !== $this->transMode) {
            $res['TransMode'] = $this->transMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjDarMethod'])) {
            $model->adjDarMethod = $map['AdjDarMethod'];
        }
        if (isset($map['IsCheckAudioBitrate'])) {
            $model->isCheckAudioBitrate = $map['IsCheckAudioBitrate'];
        }
        if (isset($map['IsCheckAudioBitrateFail'])) {
            $model->isCheckAudioBitrateFail = $map['IsCheckAudioBitrateFail'];
        }
        if (isset($map['IsCheckReso'])) {
            $model->isCheckReso = $map['IsCheckReso'];
        }
        if (isset($map['IsCheckResoFail'])) {
            $model->isCheckResoFail = $map['IsCheckResoFail'];
        }
        if (isset($map['IsCheckVideoBitrate'])) {
            $model->isCheckVideoBitrate = $map['IsCheckVideoBitrate'];
        }
        if (isset($map['IsCheckVideoBitrateFail'])) {
            $model->isCheckVideoBitrateFail = $map['IsCheckVideoBitrateFail'];
        }
        if (isset($map['TransMode'])) {
            $model->transMode = $map['TransMode'];
        }

        return $model;
    }
}
