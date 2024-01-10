<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSharePromotionSpeechModelRequest extends Model
{
    /**
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example ZFDZ
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example iot-cv3********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 61******_****_4901_****_47***********
     *
     * @var string
     */
    public $sharePromotionActivityId;

    /**
     * @example 52******_7**e_4**3_9**e_61**********
     *
     * @var string
     */
    public $shareTaskCode;

    /**
     * @example custom
     *
     * @var string
     */
    public $speechModelType;

    /**
     * @example 0
     *
     * @var int
     */
    public $speechRate;

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
        'audioFormat'              => 'AudioFormat',
        'bizCode'                  => 'BizCode',
        'iotInstanceId'            => 'IotInstanceId',
        'sharePromotionActivityId' => 'SharePromotionActivityId',
        'shareTaskCode'            => 'ShareTaskCode',
        'speechModelType'          => 'SpeechModelType',
        'speechRate'               => 'SpeechRate',
        'text'                     => 'Text',
        'voice'                    => 'Voice',
        'volume'                   => 'Volume',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->sharePromotionActivityId) {
            $res['SharePromotionActivityId'] = $this->sharePromotionActivityId;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }
        if (null !== $this->speechModelType) {
            $res['SpeechModelType'] = $this->speechModelType;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
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
     * @return CreateSharePromotionSpeechModelRequest
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SharePromotionActivityId'])) {
            $model->sharePromotionActivityId = $map['SharePromotionActivityId'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }
        if (isset($map['SpeechModelType'])) {
            $model->speechModelType = $map['SpeechModelType'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
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
