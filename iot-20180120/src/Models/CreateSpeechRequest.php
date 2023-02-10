<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSpeechRequest extends Model
{
    /**
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example identifying
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSoundCode;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $projectCode;

    /**
     * @example {"SoundCodeContent": "www.taobao.com", "AdditionalDuration": 3}
     *
     * @var mixed[]
     */
    public $soundCodeConfig;

    /**
     * @example 0
     *
     * @var int
     */
    public $speechRate;

    /**
     * @example custom
     *
     * @var string
     */
    public $speechType;

    /**
     * @example test
     *
     * @var string
     */
    public $text;

    /**
     * @example Xiaoyun
     *
     * @var string
     */
    public $voice;

    /**
     * @example 50
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'audioFormat'     => 'AudioFormat',
        'bizCode'         => 'BizCode',
        'enableSoundCode' => 'EnableSoundCode',
        'iotInstanceId'   => 'IotInstanceId',
        'projectCode'     => 'ProjectCode',
        'soundCodeConfig' => 'SoundCodeConfig',
        'speechRate'      => 'SpeechRate',
        'speechType'      => 'SpeechType',
        'text'            => 'Text',
        'voice'           => 'Voice',
        'volume'          => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->enableSoundCode) {
            $res['EnableSoundCode'] = $this->enableSoundCode;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->soundCodeConfig) {
            $res['SoundCodeConfig'] = $this->soundCodeConfig;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->speechType) {
            $res['SpeechType'] = $this->speechType;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['EnableSoundCode'])) {
            $model->enableSoundCode = $map['EnableSoundCode'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }
        if (isset($map['SoundCodeConfig'])) {
            $model->soundCodeConfig = $map['SoundCodeConfig'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['SpeechType'])) {
            $model->speechType = $map['SpeechType'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
