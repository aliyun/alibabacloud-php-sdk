<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitAudioProduceJobRequest extends Model
{
    /**
     * @description The job description.
     *
     *   The job description can be up to 1,024 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example 任务描述  长度不超过1024字节  UTF8编码
     *
     * @var string
     */
    public $description;

    /**
     * @description The audio editing configurations.
     *
     *   voice: the [voice type](https://help.aliyun.com/document_detail/449563.html).
     *   customizedVoice: the ID of the personalized human voice.
     *   format: the format of the output file. Valid values: PCM, WAV, and MP3.
     *   volume: the volume. Default value: 50. Valid values: 0 to 100.
     *   speech_rate: the speech tempo. Default value: 0. Value range: -500 to 500.
     *   pitch_rate: the intonation. Default value: 0. Value range: -500 to 500.
     *
     * This parameter is required.
     * @example {"voice":"Siqi","format":"MP3","volume":50}
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @description The text content. A maximum of 2,000 characters are supported. The [Speech Synthesis Markup Language (SSML)](https://help.aliyun.com/document_detail/2672807.html) is supported.
     *
     * This parameter is required.
     * @example 测试文本
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description The output audio configurations.
     *
     * This parameter is required.
     * @example {"bucket":"bucket","object":"objeck"}
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description Specifies whether to overwrite the existing Object Storage Service (OSS) object.
     *
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The job title. If you do not specify this parameter, the system generates a title based on the current date.
     *
     *   The job title can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example 任务标题。若不提供，根据日期自动生成默认title  长度不超过128字节  UTF8编码
     *
     * @var string
     */
    public $title;

    /**
     * @description The user-defined data in the JSON format, which can be up to 512 bytes in length. You can specify a custom callback URL. For more information, see [Configure a callback upon editing completion](https://help.aliyun.com/document_detail/451631.html).
     *
     * @example {"user":"data"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'   => 'Description',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
        'overwrite'     => 'Overwrite',
        'title'         => 'Title',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAudioProduceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
