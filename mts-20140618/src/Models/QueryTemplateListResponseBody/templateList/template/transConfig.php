<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template;

use AlibabaCloud\Tea\Model;

class transConfig extends Model
{
    /**
     * @description The method of resolution adjustment. Default value: **none**. Valid values:
     *
     *   rescale
     *   crop
     *   none
     *
     * @example none
     *
     * @var string
     */
    public $adjDarMethod;

    /**
     * @description Indicates whether the audio bitrate is checked. If the bitrate of the output audio is higher than that of the input audio, the input bitrate is retained and the specified audio bitrate does not take effect. This parameter has a lower priority than IsCheckAudioBitrateFail. Valid values:
     *
     *   **true**
     *
     *   **false**
     *
     *   Default value:
     *
     *   If this parameter is not specified and the codec of the output audio is different from that of the input audio, the default value is false.
     *   If this parameter is not specified and the codec of the output audio is the same as that of the input audio, the default value is true.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckAudioBitrate;

    /**
     * @description Indicates whether audio bitrate check errors are allowed. This parameter has a greater priority than IsCheckAudioBitrate. Valid values:
     *
     *   **true**: If the audio bitrate check fails, the input file is not transcoded.
     *   **false**: The audio bitrate is not checked.
     *   Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckAudioBitrateFail;

    /**
     * @description Indicates whether the resolution is checked. If the output resolution is higher than the input resolution based on the width or height, the input resolution is retained. Valid values:
     *
     *   **true**
     *   **false**
     *   Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckReso;

    /**
     * @description Indicates whether the resolution is checked. If the output resolution is higher than the input resolution based on the width or height, a transcoding failure is returned. Valid values:
     *
     *   **true**
     *   **false**
     *   Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckResoFail;

    /**
     * @description Indicates whether the video bitrate is checked. If the bitrate of the output video is higher than that of the input video, the input bitrate is retained. Valid values:
     *
     *   **true**
     *   **false**
     *   Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckVideoBitrate;

    /**
     * @description Indicates whether video bitrate check errors are allowed. This parameter has a higher priority than IsCheckVideoBitrate. Valid values:
     *
     *   **true**: If the video bitrate check fails, the input file is not transcoded.
     *   **false**: The video bitrate is not checked.
     *   Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $isCheckVideoBitrateFail;

    /**
     * @description The transcoding mode. Default value: **onepass**. Valid values:
     *
     *   **onepass**
     *   **twopass**
     *   **CBR**
     *
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
