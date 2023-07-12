<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSharePromotionSpeechModelRequest extends Model
{
    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $sharePromotionActivityId;

    /**
     * @var string
     */
    public $shareTaskCode;

    /**
     * @var string
     */
    public $speechModelType;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voice;

    /**
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
        Model::validateRequired('audioFormat', $this->audioFormat, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('sharePromotionActivityId', $this->sharePromotionActivityId, true);
        Model::validateRequired('shareTaskCode', $this->shareTaskCode, true);
        Model::validateRequired('speechModelType', $this->speechModelType, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('voice', $this->voice, true);
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
